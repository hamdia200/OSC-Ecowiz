<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consommation;
use App\Models\Equipment;

class DataGeneratorController extends Controller
{
    public function generateRandomData()
    {
        // Générez des données aléatoires pour 5 équipements pendant 10 secondes
        $endTime = time() + 10; // Exécutez la boucle pendant 10 secondes

        while (time() < $endTime) {
            for ($equipmentId = 1; $equipmentId <= 5; $equipmentId++) {
                $puissanceActive = rand(100, 1000); // Générez une valeur aléatoire entre 100 et 1000 W
                $state = rand(0, 1); // Générez un état aléatoire (0 ou 1)

                // Insérez les données dans la table de consommation
                $consommation = new Consommation();
                $consommation->equipment_id = $equipmentId;
                $consommation->value = $puissanceActive;
                $consommation->etat = $state;
                $consommation->save();
            }

            sleep(1); // Attendez 1 seconde avant de générer la prochaine série de données
        }

        return "Données générées avec succès.";
    }
}
