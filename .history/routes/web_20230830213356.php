<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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
Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/regulation', function () {
    return view('regulation');
});
Route::get('/Surveillance', function () {
    return view('Surveillance');
});

Route::get('/historique', function () {
    return view('historique');
});
Route::get('/profil', function () {
    return view('historique');
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

Route::get('/regulation', function () {
    return view('regulation');
})->name('regulation');


Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/Surveillance', function () {
    return view('Surveillance');
})->name('Surveillance');

Route::get('/prediction', function () {
    return view('prediction');
})->name('prediction');

Route::get('/historique', function () {
    return view('historique');
})->name('historique');
