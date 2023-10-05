<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class NewEquipmentController extends Controller
{
    //
    // Afficher tous les équipements
   public function index()
   {
       // Récupérer tous les équipements de la base de données
       $equipments = Equipment::all();
   
       // Charger la vue et passer les équipements à la vue
       return view('regulation', ['equipments' => $equipments]);
   }


    // Afficher un équipement spécifique
    public function show($id)
    {
        // Code pour récupérer un équipement spécifique depuis la base de données
    }

    // Créer un nouvel équipement
    public function store(Request $request)
    {
        // Code pour créer un nouvel équipement dans la base de données
    }

    // Mettre à jour un équipement
    public function update(Request $request, $id)
    {
        // Code pour mettre à jour un équipement dans la base de données
        // Valider les données reçues de la requête
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive', // Assurez-vous que 'status' est soit 'active', soit 'inactive'
        ]);

        // Recherchez l'équipement à mettre à jour par son ID
        $equipment = Equipment::findOrFail($id);

        // Mettez à jour les propriétés de l'équipement
        $equipment->name = $data['name'];
        $equipment->description = $data['description'];
        $equipment->status = $data['status'];

        // Enregistrez les modifications dans la base de données
        $equipment->save();

        return response()->json(['message' => 'Équipement mis à jour avec succès']);
    }

    // Supprimer un équipement
    public function destroy($id)
    {
        // Code pour supprimer un équipement de la base de données
        // Recherchez l'équipement à supprimer par son ID
        $equipment = Equipment::findOrFail($id);

        // Supprimez l'équipement de la base de données
        $equipment->delete();

        return response()->json(['message' => 'Équipement supprimé avec succès']);
    }

    public function updateState(Request $request)
    {
        $equipmentId = $request->input('equipmentId');
        $newState = $request->input('newState');
    
        // Mettez à jour l'état de l'équipement dans la base de données
        $equipment = Equipment::find($equipmentId);
        if ($equipment) {
            $equipment->etat = $newState;
            $equipment->save();
    
            // Réponse JSON pour indiquer le succès
            $response = ['message' => 'État mis à jour avec succès'];
    
            // Maintenant, envoyez la demande POST à l'ESP32 pour mettre à jour son état
            $espResponse = $this->sendRequestToESP32($equipmentId, $newState);
    
            // Ajoutez la réponse de l'ESP32 à la réponse JSON
            $response['espResponse'] = $espResponse;
    
            return response()->json($response);
        } else {
            // Réponse JSON avec un code d'erreur 404 si l'équipement n'est pas trouvé
            return response()->json(['message' => 'Équipement non trouvé'], 404);
        }
    }



    private function sendRequestToESP32($equipmentId, $newState)
{
    // Utilisez la bibliothèque Guzzle HTTP Client pour envoyer la demande POST à l'ESP32
    $client = new \GuzzleHttp\Client();
    $espUrl = 'http://adresse-de-lesp32/endpoint'; // URL de l'ESP32 pour mettre à jour l'état

    try {
        $response = $client->request('POST', $espUrl, [
            'form_params' => [
                'equipmentId' => $equipmentId,
                'newState' => $newState,
            ],
        ]);

        // Récupérez la réponse de l'ESP32
        return $response->getBody()->getContents();
    } catch (\Exception $e) {
        // Gestion des erreurs de communication avec l'ESP32
        return $e->getMessage();
    }
}

}
