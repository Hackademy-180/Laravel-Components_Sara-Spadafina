<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
// homepage
Route::get('/', [PublicController::class, "homepage"])->name("homepage_");
// libri
Route::get("/libri", [PublicController::class, "libri"])->name("libri_");
// dettaglio libri
Route::get("/dettaglio/libri/{id}", [PublicController::class, "dettaglio"])->name("dettaglio_libri_");
