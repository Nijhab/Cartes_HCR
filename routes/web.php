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

Route::get('liste_carte', [CarteController::class, 'index'])->name('liste');

Route::get('formulaire_carte', [CarteController::class, 'create'])->name('formulaire');

Route::post('insertion', [CarteController::class, 'store'])->name('insertion');