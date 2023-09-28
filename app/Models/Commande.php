<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commandes'; // Nom de la table dans la base de données
    protected $fillable = ['equipment_id', 'etat']; // Ajoutez d'autres champs ici si nécessaire

    // Vous pouvez ajouter des relations ici si votre modèle est associé à d'autres modèles

    // Exemple de relation : une commande peut être liée à un utilisateur
    // public function utilisateur()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // Vous pouvez également ajouter des méthodes spécifiques aux commandes ici
}
