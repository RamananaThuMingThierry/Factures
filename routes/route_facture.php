<?php
    use App\Http\Controllers\factureController;
    use Illuminate\Support\Facades\Route;

/****************************** Facture ********************************** */
Route::get('/',[factureController::class,'index'])->name('facture.index');