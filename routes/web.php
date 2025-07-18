<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('chi-siamo', [PublicController::class, 'aboutUs'])->name('about-us');

Route::get('contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/chi-siamo/detail/{name}', [AboutUsController::class, 'aboutUsDetail'])->name('about-us-detail');

Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti');

Route::get('/prodotti/detail/{id}', [ProdottiController::class, 'prodottiDetail'])->name('prodotti-detail');

Route::post('/contatti/submit',[PublicController::class, 'submit'])->name('contatti.submit');