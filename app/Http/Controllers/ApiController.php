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
            'equipment_id' => 'required|numeric',
            'etat' => 'required|in:0,1', // Assurez-vous que 'etat' est soit 0, soit 1
        ]);
    
        // Enregistrer la commande en base de données (vous pouvez inclure 'contenu' ici si nécessaire)
        $commande = new Commande();
        $commande->contenu = ''; // Vous pouvez laisser le champ 'contenu' vide si ce n'est pas nécessaire
        $commande->equipment_id = $data['equipment_id'];
        $commande->etat = $data['etat'];
        $commande->save();
    
        // Envoi de la commande à l'ESP32 via une requête HTTP POST
        $response = Http::post('http://adresse-de-votre-esp32', [
            'equipment_id' => $data['equipment_id'],
            'etat' => $data['etat'],
        ]);
    
        // Vérifiez la réponse de l'ESP32 et effectuez des actions en fonction
    
        return response()->json(['message' => 'Commande traitée avec succès']);
    }
    


public function recevoirDonneesConsommation(Request $request)
{
    // Valider les données reçues du corps de la requête
    $data = $request->validate([
        'value' => 'required|numeric',
        'etat' => 'required|in:0,1', // Assurez-vous que 'etat' est soit 0, soit 1
        'equipment_id' => 'required|numeric',
        
        //'equipment_id' => 'required|exists:equipments,id', // Assurez-vous que l'ID de l'équipement existe dans la table equipments
        
    ]);

    // Enregistrer les données dans la base de données
    $consommation = new Consommation([
        'value' => $data['value'],
        'etat' => $data['etat'],
        'equipment_id' => $data['equipment_id'], // Utilisation de l'ID de l'équipement fourni dans la demande
    ]);
    $consommation->save();

    return response()->json(['message' => 'Données de consommation enregistrées avec succès'], 201);
}


}
