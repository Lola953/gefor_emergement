<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EmargementController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('signature');
})->name('accueil');

// Liste de tous les cours
Route::get('/accueil', [AccueilController::class, 'getCours'])->name('cours.accueil');

// Liste de tous les émargements
Route::get('/emargement', [EmargementController::class, 'index'])->name('emargement.index');

// Afficher le formulaire de signature
Route::get('/emargement/create', [EmargementController::class, 'create'])->name('emargement.create');

// Enregistrer la signature en base de données
Route::post('/emargement', [EmargementController::class, 'store'])->name('emargement.store');
