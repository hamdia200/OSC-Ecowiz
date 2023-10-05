<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Consommation;
use App\Models\Equipment;

class AccueilController extends Controller
{
    //
    public function index()
    {
        
        // Dans votre contrôleur ou n'importe où dans l'application
        $consommationTotale = config('app.consumption_total');



        
        $consommationT = Consommation::selectRaw('equipment_id, AVG(value) as average_power')
        ->groupBy('equipment_id')
        ->get();

    // Calcul du pourcentage de consommation pour chaque équipement
        $consommationTotale = ($consommationT ->sum('average_power'))/1000;   

        
        return view('accueil', compact( 'consommationTotale' ));
    }
}
