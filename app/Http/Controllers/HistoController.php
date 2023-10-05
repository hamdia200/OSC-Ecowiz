<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoController extends Controller
{
   
    public function show24Hours()
    {
        $range = '24';
        $data = DB::select("
            SELECT
                DATE_FORMAT(created_at, '%Y-%m-%d %H:00:00') AS hour,
                SUM(value) / 1000 AS total_consumption
            FROM
                consommation
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
    }

    public function show7Days()
{
    // Récupérez les données des 7 derniers jours depuis la table 'consommation'
    $data = DB::select("
        SELECT
            DATE_FORMAT(created_at, '%Y-%m-%d') AS day,
            SUM(value) / 1000 AS total_consumption
        FROM
            consommation
        WHERE
            created_at >= NOW() - INTERVAL 7 DAY
        GROUP BY
            day
        ORDER BY
            day ASC;
    ");

    // Passez les données à la vue et affichez-les
    return view('historique.7jours', ['data' => $data]);
}



    public function show30Days()
    {
        // Récupérez les données des 30 derniers jours depuis la table 'consommation'
        $data = DB::select("
            SELECT
                DATE_FORMAT(created_at, '%Y-%m-%d') AS day,
                SUM(value) / 1000 AS total_consumption
            FROM
                consommation
            WHERE
                created_at >= NOW() - INTERVAL 30 DAY
            GROUP BY
                day
            ORDER BY
                day ASC;
        ");

        // Passez les données à la vue et affichez-les
        return view('historique.30jours', ['data' => $data]);
    }

    public function show3Months()
    {
        // Récupérez les données des 3 derniers mois depuis la table 'consommation'
        $data = DB::select("
            SELECT
                DATE_FORMAT(created_at, '%Y-%m') AS month,
                SUM(value) / 1000 AS total_consumption
            FROM
                consommation
            WHERE
                created_at >= NOW() - INTERVAL 3 MONTH
            GROUP BY
                month
            ORDER BY
                month ASC;
        ");

        // Passez les données à la vue et affichez-les
        return view('historique.3mois', ['data' => $data]);
    }

    public function show12Months()
    {
        // Récupérez les données des 12 derniers mois depuis la table 'consommation'
        $data = DB::select("
            SELECT
                DATE_FORMAT(created_at, '%Y-%m') AS month,
                SUM(value) / 1000 AS total_consumption
            FROM
                consommation
            WHERE
                created_at >= NOW() - INTERVAL 12 MONTH
            GROUP BY
                month
            ORDER BY
                month ASC;
        ");

        // Passez les données à la vue et affichez-les
        return view('historique.12mois', ['data' => $data]);
    }

    

}
