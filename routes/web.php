<?php

use App\Http\Controllers\EtudiantController;
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
})->name("accueil");
Route::get("/etudiant", [EtudiantController::class, "index"])->name("etudiant");
Route::get("/etudiant/create", [EtudiantController::class, "create"])->name("etudiant.create");
Route::get("/etudiant/create", [EtudiantController::class, "store"])->name("etudiant.ajouter");
