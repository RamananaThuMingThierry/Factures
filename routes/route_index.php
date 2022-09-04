<?php

    use App\Http\Controllers\IndexFactureController;
    use Illuminate\Support\Facades\Route;

/****************************** Index ********************************** */
Route::get('/index',[IndexFactureController::class,'index'])->name('index.index');

// Ajouter
Route::get('/index_ajouter',[IndexFactureController::class,'ajouter'])->name('index.ajouter');
Route::post('/index_traitement',[IndexFactureController::class,'traitement'])->name('index.traitement');

// Trouvez dernière index consommer dans l'ajoute
Route::post('/TrouvezDernierIndexConsommer',[IndexFactureController::class,'TrouvezDernierIndexConsommerAjouter']);
Route::post('/TrouvezDernierIndexConsommer_edit',[IndexFactureController::class,'TrouvezDernierIndexConsommerModifier'])->name('index.edit_recherches');

// Payer facutre
Route::get('/index_facture/{index}',[IndexFactureController::class,'payer'])->name('index.payer')->whereNumber('index');

// Modifier
Route::get('/index_modifier/{index}',[IndexFactureController::class,'modifier'])->name('index.modifier')->whereNumber('index');
Route::post('/index/{index}',[IndexFactureController::class,'chargement'])->name('index.chargement')->whereNumber('index');

// Supprimer un produit
Route::get('/index_supprimer/{index}',[IndexFactureController::class,'supprimer'])->name('index.supprimer')->whereNumber('index');
Route::get('/index/{index}/supprimer',[IndexFactureController::class,'suppression'])->whereNumber('index');