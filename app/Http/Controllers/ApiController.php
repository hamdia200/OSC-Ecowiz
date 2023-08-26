<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consommation; // Assurez-vous d'importer le modèle Consommation si vous en avez un

class ApiController extends Controller
{


    public function envoyerCommande(Request $request)
    {
        // Ici, vous pouvez implémenter la logique pour traiter la commande reçue
        // par exemple, enregistrer la commande en base de données

        $commande = new Commande(); // Supposons que vous avez un modèle "Commande"
        $commande->contenu = $request->input('contenu'); // Supposons que le contenu de la commande est envoyé dans la requête
        $commande->save();

        return response()->json(['message' => 'Commande traitée avec succès']);
    }


public function recevoirDonneesConsommation(Request $request)
{
    // Valider les données reçues du corps de la requête
    $data = $request->validate([
        'valeur' => 'required|numeric',
        'date' => 'required|date',
    ]);

    // Enregistrer les données dans la base de données
    $consommation = new Consommation([
        'valeur' => $data['valeur'],
        'date' => $data['date'],
    ]);
    $consommation->save();

    return response()->json(['message' => 'Données de consommation enregistrées avec succès'], 201);
}


}
