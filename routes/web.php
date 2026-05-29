<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmargementController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Routes publiques (sans connexion)
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('cours.accueil');
    }
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'connecter'])->name('login.post');

Route::get('/mobile', function () {return view('mobile');})->name('mobile');

// Routes protégées (connexion obligatoire)
Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/me', [AuthController::class, 'me'])->name('me');

    Route::get('/apprenants', function () {
        return view('apprenants');
    })->name('apprenants');
    Route::get('/formateurs', function () {
        return view('formateurs');
    })->name('formateurs');
    Route::get('/administration', function () {
        return view('administration');
    })->name('administration');

    Route::get('/accueil', [AccueilController::class, 'getCours'])->name('cours.accueil');

    Route::get('/emargement', [EmargementController::class, 'index'])->name('emargement.index');
    Route::get('/emargement/create', [EmargementController::class, 'create'])->name('emargement.create');
    Route::post('/emargement', [EmargementController::class, 'store'])->name('emargement.store');
});
