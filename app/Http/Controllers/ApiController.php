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
        $command = $request->input('command');
        $id = $request->input('id'); // Récupérez l'ID depuis la requête
        $numero = ($command === 'on') ? 1 : 2; // Déterminez le numéro en fonction de la commande
    
        if ($command === 'on' || $command === 'off') {
            // Sauvegarder la commande dans la base de données
            $nouvelleCommande = new Commande();
            $nouvelleCommande->command = $command;
            $nouvelleCommande->save();
    
            // Préparez les données à envoyer à l'ESP32
            $data = [
                'id' => $id,
                'numero' => $numero,
            ];
    
            // Envoi de la commande à l'ESP32 via une requête HTTP POST
            $response = Http::post('http://adresse-de-votre-esp32', [
                'contenu' => json_encode($data),
            ]);
    
            if ($response->successful()) {
                return response()->json(['message' => 'Commande envoyée avec succès']);
            } else {
                // Gérer l'erreur si la requête n'a pas réussi
                return response()->json(['message' => 'Erreur lors de l\'envoi de la commande'], 500);
            }
        } else {
            // Commande non reconnue, gérer l'erreur
            return response()->json(['message' => 'Commande non reconnue'], 400);
        }
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
