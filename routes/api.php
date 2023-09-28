<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    
});


//Route::get('/equipments', [EquipmentController::class, 'index']);
//Route::post('/equipments', [EquipmentController::class, 'store']);
//Route::get('/equipments/{id}', [EquipmentController::class, 'show']);
//Route::put('/equipments/{id}', [EquipmentController::class, 'update']);
//Route::delete('/equipments/{id}', [EquipmentController::class, 'destroy']);



Route::post('/consommation', [ApiController::class, 'recevoirDonneesConsommation']);


Route::post('/commande', [ApiController::class, 'envoyerCommande']);


// Route pour mettre à jour l'équipement
//Route::put('/equipments/{id}', [NewEquipmentController::class, 'update']);

// Route pour supprimer l'équipement
//Route::delete('/equipments/{id}', [NewEquipmentController::class, 'destroy']);

