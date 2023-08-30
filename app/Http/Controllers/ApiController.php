<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Consommation; 

class ApiController extends Controller
{


    public function envoyerCommande(Request $request)
    {
        // Valider les données reçues de la requête
        $data = $request->validate([
            'contenu' => 'required|string', // Assurez-vous d'avoir le champ 'contenu' dans la requête
        ]);

        // Enregistrer la commande en base de données
        $commande = new Commande();
        $commande->contenu = $data['contenu'];
        $commande->save();

        // Envoi de la commande à l'ESP32 via une requête HTTP POST
        $response = Http::post('http://adresse-de-votre-esp32', [
            'contenu' => $data['contenu'],
        ]);

        // Vérifiez la réponse et effectuez des actions en fonction

        return response()->json(['message' => 'Commande traitée avec succès']);
    }


public function recevoirDonneesConsommation(Request $request)
{
    // Valider les données reçues du corps de la requête
    $data = $request->validate([
            'value' => 'required|numeric',
            'date_time' => 'required|date_format:Y-m-d H:i:s', // Format correspondant à "2023-08-29 10:59:51"
            'equipment_id' => 'required|numeric'
        
        //'equipment_id' => 'required|exists:equipments,id', // Assurez-vous que l'ID de l'équipement existe dans la table equipments
        
    ]);

    // Enregistrer les données dans la base de données
    $consommation = new Consommation([
        'value' => $data['value'],
        'date_time' => $data['date_time'],
        'equipment_id' => $data['equipment_id'], // Utilisation de l'ID de l'équipement fourni dans la demande
    ]);
    $consommation->save();

    return response()->json(['message' => 'Données de consommation enregistrées avec succès'], 201);
}


}
