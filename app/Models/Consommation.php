<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consommation extends Model
{
    protected $table = 'consommations'; // Nom de la table dans la base de données
    protected $fillable = ['value', 'equipment_id', 'etat']; // Ajoutez 'date_time' ici si nécessaire

    public function equipement()
    {
        return $this->belongsTo(Equipement::class, 'equipment_id'); // Utilisez 'equipment_id' ici également
    }
}


