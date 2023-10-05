<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Consommation;
use App\Models\Equipment;

class NewSurveillanceController extends Controller
{

    public function index()
    {
        $initialData = $this->fetchInitialConsumption();
        $chartData = $this->fetchChartData();
        $realtimeConsumptionData = $this->fetchRealtimeConsumption();
        // Dans votre contrôleur ou n'importe où dans l'application
        $consommationTotale = config('app.consumption_total');



        
        $consommationT = Consommation::selectRaw('equipment_id, AVG(value) as average_power')
        ->groupBy('equipment_id')
        ->get();

    // Calcul du pourcentage de consommation pour chaque équipement
        $consommationTotale = ($consommationT ->sum('average_power'))/1000;   

        // Retournez les deux vues avec leurs données respectives
        return view('surveillance', compact('initialData', 'consommationTotale', 'realtimeConsumptionData', 'chartData'));
           

    }

    private function calculateTotalConsumption()
    {
        // Calcul de la consommation totale
        $consommationT = Consommation::selectRaw('equipment_id, AVG(value) as average_power')
            ->groupBy('equipment_id')
            ->get();
        $consommationTotale = ($consommationT->sum('average_power')) / 1000;
        return $consommationTotale;
    }

    public function fetchRealtimeConsumption()
    {
        // Récupérez les données de consommation en temps réel depuis la table 'consommations'
        $realtimeConsumptionData = Consommation::selectRaw('equipment_id, AVG(value) as average_power')
            ->groupBy('equipment_id')
            ->get();

        // Calcul du pourcentage de consommation pour chaque équipement
        $totalPower = $realtimeConsumptionData->sum('average_power');
        $realtimeConsumptionData->each(function ($item) use ($totalPower) {
            $item->pourcentage = ($item->average_power / $totalPower) * 100;
        });

        // Récupérez les noms des équipements à partir de la table 'equipments'
        $equipmentNames = Equipment::pluck('name', 'id');

        // Créez un tableau final avec le nom, le pourcentage et la consommation en kWh de chaque équipement
        $finalData = $realtimeConsumptionData->map(function ($item) use ($equipmentNames) {
            return [
                'equipment_name' => $equipmentNames[$item->equipment_id],
                'pourcentage' => round($item->pourcentage, 2), // Arrondi à deux décimales
                'consumption' => round($item->average_power / 1000, 2), // Conversion de W à kWh et arrondi à deux décimales
            ];
        });

        //return response()->json($finalData);
        return ['finalData' => $finalData];
    }


    public function fetchInitialConsumption()
    {
        // Récupérez les données initiales depuis la table 'consommations'
        $initialConsumptionData = Consommation::selectRaw('equipment_id, AVG(value) as average_power')
            ->groupBy('equipment_id')
            ->get();

        // Calcul du pourcentage de consommation pour chaque équipement
        $totalPower = $initialConsumptionData->sum('average_power');
        $initialConsumptionData->each(function ($item) use ($totalPower) {
            $item->pourcentage = ($item->average_power / $totalPower) * 100;
        });

        // Récupérez les noms des équipements à partir de la table 'equipments'
        $equipmentNames = Equipment::pluck('name', 'id');

        // Créez un tableau final avec le nom, le pourcentage et la consommation en kWh de chaque équipement
        $initialData = $initialConsumptionData->map(function ($item) use ($equipmentNames) {
            return [
                'equipment_name' => $equipmentNames[$item->equipment_id],
                'pourcentage' => round($item->pourcentage, 2), // Arrondi à deux décimales
                'consumption' => round($item->average_power / 1000, 2), // Conversion de W à kWh et arrondi à deux décimales
            ];
        });

        //return response()->json($initialData);
        return ['initialData' => $initialData];

    }

    public function fetchChartData()
{
    // Récupérez les données initiales depuis votre modèle ou autre source
    $initialData = $this->fetchInitialConsumption();

    // Créez un tableau pour les étiquettes (noms des équipements)
    $labels = [];
    
    // Créez un tableau pour les valeurs de consommation en pourcentage
    $values = [];

    foreach ($initialData['initialData'] as $data) {
        $labels[] = $data['equipment_name'];
        $values[] = $data['pourcentage'];
    }

    // Créez un tableau de données pour le graphique
    $chartData = [
        'labels' => $labels,
        'values' => $values,
    ];

    return response()->json($chartData);
    
}

public function show24Hours()
    {
        $range = '24';
        $data = DB::select("
            SELECT
                DATE_FORMAT(created_at, '%Y-%m-%d %H:00:00') AS hour,
                SUM(value) / 1000 AS total_consumption
            FROM
                consommations
            WHERE
                created_at >= NOW() - INTERVAL 24 HOUR
            GROUP BY
                hour
            ORDER BY
                hour ASC;
        ");
    
            // Définir la période de temps à '24' pour 24 heures
        


        // Passez les données et la variable $range à la vue
        return view('historique', [
            'data' => $data, // Remplacez $data par vos données réelles
            'range' => $range,
        ]);

        dd($data);
    }




    public function show7Days()
    {
        // Récupérez les données des 7 derniers jours depuis la table 'consommation'
        $range = '168';
        $data = DB::select("
            SELECT
                DATE_FORMAT(created_at, '%Y-%m-%d') AS day,
                SUM(value) / 1000 AS total_consumption
            FROM
                consommations
            WHERE
                created_at >= NOW() - INTERVAL 7 DAY
            GROUP BY
                day
            ORDER BY
                day ASC;
        ");
    
        // Passez les données à la vue et affichez-les
        return view('historique', [
            'data' => $data, // Remplacez $data par vos données réelles
            'range' => $range,
        ]);
    }
    
    
    
        public function show30Days()
        {
            // Récupérez les données des 30 derniers jours depuis la table 'consommation'
            $range = '720';
            $data = DB::select("
                SELECT
                    DATE_FORMAT(created_at, '%Y-%m-%d') AS day,
                    SUM(value) / 1000 AS total_consumption
                FROM
                    consommations
                WHERE
                    created_at >= NOW() - INTERVAL 30 DAY
                GROUP BY
                    day
                ORDER BY
                    day ASC;
            ");
    
            // Passez les données à la vue et affichez-les
            return view('historique', [
                'data' => $data, // Remplacez $data par vos données réelles
                'range' => $range,
            ]);
        }
    
        public function show3Months()
        {
            // Récupérez les données des 3 derniers mois depuis la table 'consommation'
            $range = '2160';
            $data = DB::select("
                SELECT
                    DATE_FORMAT(created_at, '%Y-%m') AS month,
                    SUM(value) / 1000 AS total_consumption
                FROM
                    consommations
                WHERE
                    created_at >= NOW() - INTERVAL 3 MONTH
                GROUP BY
                    month
                ORDER BY
                    month ASC;
            ");
    
            // Passez les données à la vue et affichez-les
            return view('historique', [
                'data' => $data, // Remplacez $data par vos données réelles
                'range' => $range,
            ]);
        }
    
        public function show12Months()
        {
            // Récupérez les données des 12 derniers mois depuis la table 'consommation'
            $range = '8640';
            $data = DB::select("
                SELECT
                    DATE_FORMAT(created_at, '%Y-%m') AS month,
                    SUM(value) / 1000 AS total_consumption
                FROM
                    consommations
                WHERE
                    created_at >= NOW() - INTERVAL 12 MONTH
                GROUP BY
                    month
                ORDER BY
                    month ASC;
            ");
    
            // Passez les données à la vue et affichez-les
            return view('historique', [
                'data' => $data, // Remplacez $data par vos données réelles
                'range' => $range,
            ]);
        }

}
