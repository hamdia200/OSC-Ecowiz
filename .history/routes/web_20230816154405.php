<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/centrale', function () {
    return view('centrale');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/regulation', function () {
    return view('regulation');
});


