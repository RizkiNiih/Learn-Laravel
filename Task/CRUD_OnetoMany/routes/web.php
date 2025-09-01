<?php

use App\Http\Controllers\TabelCRUDController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('berita')->name('berita.')->group(function () {
    Route::get('/home', [TabelCRUDController::class, 'home'])->name('home');
    Route::get('/create', [TabelCRUDController::class, 'create'])->name('create');
    Route::post('/store', [TabelCRUDController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TabelCRUDController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [TabelCRUDController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TabelCRUDController::class, 'destroy'])->name('destroy');
});
