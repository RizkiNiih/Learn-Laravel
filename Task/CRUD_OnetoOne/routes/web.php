<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelCRUDController;

Route::get('/', function () {
    return view('welcome'); 
});

Route::prefix('Tabel-CRUD')->name('Tabel-CRUD.')->group(function () {
    Route::get('/home', [TabelCRUDController::class, 'index'])->name('index');
    Route::get('/create', [TabelCRUDController::class, 'create'])->name('create');
    Route::post('/store', [TabelCRUDController::class, 'store'])->name('store');
});

