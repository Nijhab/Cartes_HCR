<?php

use App\Http\Controllers\CarteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('liste_gestion_perso', [Gestion_persoController::class, 'index'])->name('liste');

// Route::get('formulaire_gestion_perso', [Gestion_persoController::class, 'create'])->name('formulaire');

// Route::post('insertion', [Gestion_persoController::class, 'store'])->name('insertion');

// Route::post('liste_gestion_perso', [Gestion_persoController::class, 'destroy'])->name('liste');

Route::resource('gestion_carte', CarteController::class);

Route::get('supprimer_carte/{id}', [CarteController::class, 'destroy']);

// Route::get('modifier_carte/{id}', [CarteController::class, 'edit']);
// Route::get('carte_carte/{id}', [CarteController::class, 'show']);