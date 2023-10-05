<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewEquipmentController;
use App\Http\Controllers\NewSurveillanceController;
use App\Http\Controllers\DataGeneratorController;
use App\Http\Controllers\AccueilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/centrale', function () {
//     return view('centrale');
// });
//Route::get('/accueil', function () {
    //return view('accueil');
//});

Route::get('/login', function () {
    return view('login');
});
// Utilisez le contrôleur pour la vue "regulation"

Route::get('/regulation', function () {
    return redirect('/equipments');
});

//Route::get('/Surveillance', function () {
  //  return view('Surveillance');
//});

Route::get('/historique', function () {
    return view('historique');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/notification', function () {
    return view('notification');
});
Route::get('/prediction', function () {
    return view('prediction');
});

Route::get('/inscription', [AuthController::class, 'showRegistrationForm'])->name('inscription.form');
Route::post('/inscription', [AuthController::class, 'register'])->name('inscription.submit');

Route::get('/connexion', function () {
    return view('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);



Route::get('/inscription', [AuthController::class, 'showRegistrationForm'])->name('inscription');
Route::post('/inscription', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

//Route::get('/regulation', function () {
  //  return view('regulation');
//})->name('regulation');


//Route::get('/accueil', function () {
    //return view('accueil');
//})->name('accueil');

//Route::get('/Surveillance', function () {
  //  return view('Surveillance');
//})->name('Surveillance');

Route::get('/prediction', function () {
    return view('prediction');
})->name('prediction');

Route::get('/historique', function () {
    return view('historique');
})->name('historique');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/equipments', [NewEquipmentController::class, 'index'])->name('equipments');
Route::post('/update-equipment-state', [NewEquipmentController::class, 'updateState']);


Route::get('/generate-random-data', [DataGeneratorController::class, 'generateRandomData']);



Route::get('/surveillance', [NewSurveillanceController::class, 'index'])->name('Surveillance');
Route::get('/fetch-realtime-consumption', [NewSurveillanceController::class, 'fetchRealtimeConsumption'])->name('surveillance.fetch');
// routes/web.php

Route::get('/fetch-initial-consumption', [NewSurveillanceController::class, 'fetchInitialConsumption'])->name('surveillance.fetch.initial');

//Route::get('/fetch-chart-data', 'NewSurveillanceController@fetchChartData')->name('fetch-chart-data');
Route::get('/fetch-chart-data', [NewSurveillanceController::class, 'fetchChartData'])->name('fetch-chart-data');


Route::get('/historique-24h', [NewSurveillanceController::class, 'show24Hours']);
Route::get('/historique/7jours', [NewSurveillanceController::class, 'show7Days']);
Route::get('/historique/30jours', [NewSurveillanceController::class, 'show30Days']);
Route::get('/historique/3mois', [NewSurveillanceController::class, 'show3Months']);
Route::get('/historique/12mois', [NewSurveillanceController::class, 'show12Months']);

Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');
