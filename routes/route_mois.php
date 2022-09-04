<?php

use App\Http\Controllers\MoisFactureController;
use Illuminate\Support\Facades\Route;

/****************************** MOIS********************************** */

// index
Route::get('/Mois',[MoisFactureController::class,'index'])->name('mois.index');

//Ajouter
Route::get('/ajouter_mois',[MoisFactureController::class,'ajouter'])->name('mois.ajouter');
Route::post('/mois',[MoisFactureController::class,'traitement'])->name('mois.traitement');

//Modification
Route::get('/mois_modifier/{mois}',[MoisFactureController::class,'modifier'])->name('mois.modifier')->whereNumber('mois');
Route::post('/mois/{mois}',[MoisFactureController::class,'chargement'])->name('mois.chargement')->whereNumber('mois');

// Suppression
Route::get('/mois_supprimer/{mois}',[MoisFactureController::class,'supprimer'])->name('mois.supprimer')->whereNumber('mois');
Route::get('/mois/{mois}/supprimer',[MoisFactureController::class,'suppression'])->name('mois.suppression')->whereNumber('mois');