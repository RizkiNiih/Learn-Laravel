<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', [PortoController::class, 'about']);

Route::get('/login', function () {
    return view('login');
});