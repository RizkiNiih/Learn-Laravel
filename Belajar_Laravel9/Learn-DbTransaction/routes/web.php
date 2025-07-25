<?php

use App\Models\Product;
use App\Models\LogActivity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-product', function() {
    try {
        DB::beginTransaction();

        Product::create([
            'name' => 'Tepung Maizena'
        ]);
    
        LogActivity::create([
            'description' => 'Item Tepung Maizena diinput oleh staff A'
        ]);
        
        DB::commit();
    } catch (\Throwable $th) {
        DB::rollBack();
    }
});
