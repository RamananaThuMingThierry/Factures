<?php
    use App\Http\Controllers\PortesController;
    use Illuminate\Support\Facades\Route;



/**************************************** Portes *************************** */
Route::get('/portes',[PortesController::class,'index'])->name('portes.index');
//Ajouter
Route::get('/Ajouter_numero_porte',[PortesController::class,'ajouter'])->name('portes.ajouter');
Route::post('/portes',[PortesController::class,'traitement'])->name('portes.traitement');

//Modifier
Route::get('/porte_modifier/{porte}',[PortesController::class,'modifier'])->name('portes.modifier')->whereNumber('porte');
Route::post('/porte/{porte}',[PortesController::class,'chargement'])->name('portes.chargement')->whereNumber('porte');

// Supprimer un produit
Route::get('/porte_supprimer/{porte}',[PortesController::class,'supprimer'])->name('portes.supprimer')->whereNumber('porte');
Route::get('/porte/{porte}/supprimer',[PortesController::class,'suppression'])->name('portes.suppression')->whereNumber('porte');