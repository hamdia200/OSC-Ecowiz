<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index()
    {
        // Exemple de données d'interrupteurs
        $interrupteurs = [
            ['nom' => 'Switch 1', 'etat' => 'on'],
            ['nom' => 'Switch 2', 'etat' => 'off'],
            ['nom' => 'Switch 3', 'etat' => 'on'],
            ['nom' => 'Switch 4', 'etat' => 'off'],
            ['nom' => 'Switch 5', 'etat' => 'on'],
        ];

        // Passer les données à la vue
        return view('regulation', ['interrupteurs' => $interrupteurs]);
    }
}
