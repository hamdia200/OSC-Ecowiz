<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipment; // Ajoutez cette ligne

class EquipmentSeeder extends Seeder
{
    public function run()
    {
        $equipments = [
            [
                'name' => 'Micro-onde',
                'etat' => 1, // 1 pour actif, 0 pour inactif
                'equipment_id' => 1, // Remplacez ceci par l'ID souhaité
            ],
            [
                'name' => 'Television',
                'etat' => 0,
                'equipment_id' => 2,
            ],
            [
                'name' => 'Climatiseeur',
                'etat' => 1,
                'equipment_id' => 3,
            ],
            [
                'name' => 'Ventilateur',
                'etat' => 0,
                'equipment_id' => 4,
            ],
            [
                'name' => 'Imprimante',
                'etat' => 1,
                'equipment_id' => 5,
            ],
        ];

        // Insérer les données dans la table Equipment
        foreach ($equipments as $equipment) {
            Equipment::create($equipment);
        }
    }
}
