<?php

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('oggetti', [ItemsController::class, 'oggetti'])->name('items');

Route::get('price', [PublicController::class, 'meme'])->name('sche');

Route::get('oggetto/{nome}', [ItemsController::class, 'dettaglio'])->name('dettaglio');