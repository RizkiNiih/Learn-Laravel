<?php

use App\Models\Category;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Controllers\DashboardProductController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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


Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Alfa Rizki",
        "email" => "kepoyaa@gmail.my.id",
        "image" => "alfa.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/books', [BookController::class, 'index']);
Route::get('books/{book:id}', [BookController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
        

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('login')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('dashboard/profiles', DashboardProfileController::class)->middleware('auth');

// Route::middleware('auth')->group(function () {

//     Route::get('dashboard/profilles', [DashboardProfilleController::class, 'index'])->name('ussers.index'); // Menampilkan daftar produk
//     Route::get('dashboard/profilles/create', [DashboardProfilleController::class, 'create'])->name('ussers.create'); // Form tambah produk
//     Route::post('dashboard/profilles', [DashboardProfilleController::class, 'store'])->name('ussers.store'); // Simpan produk baru
//     Route::get('dashboard/profilles/{id}', [DashboardProfilleController::class, 'show'])->name('ussers.show'); // Tampilkan detail produk
//     Route::get('dashboard/profilles/{id}/edit', [DashboardProfilleController::class, 'edit'])->name('ussers.edit'); // Form edit produk
//     Route::put('dashboard/profilles/{id}', [DashboardProfilleController::class, 'update'])->name('ussers.update'); // Update produk
//     Route::delete('dashboard/profilles/{id}', [DashboardProfilleController::class, 'destroy'])->name('ussers.destroy'); // Hapus produk
    
// });

Route::middleware('auth')->group(function () {

    Route::get('dashboard/products', [DashboardProductController::class, 'index'])->name('products.index'); // Menampilkan daftar produk
    Route::get('dashboard/products/create', [DashboardProductController::class, 'create'])->name('products.create'); // Form tambah produk
    Route::post('dashboard/products', [DashboardProductController::class, 'store'])->name('products.store'); // Simpan produk baru
    Route::get('dashboard/products/{id}', [DashboardProductController::class, 'show'])->name('products.show'); // Tampilkan detail produk
    Route::get('dashboard/products/{id}/edit', [DashboardProductController::class, 'edit'])->name('products.edit'); // Form edit produk
    Route::put('dashboard/products/{id}', [DashboardProductController::class, 'update'])->name('products.update'); // Update produk
    Route::delete('dashboard/products/{id}', [DashboardProductController::class, 'destroy'])->name('products.destroy'); // Hapus produk
    
});

Route::middleware('auth')->group(function () {

    Route::get('dashboard/books', [DashboardBookController::class, 'index'])->name('books.index'); // Menampilkan daftar produk
    Route::get('dashboard/books/create', [DashboardBookController::class, 'create'])->name('books.create'); // Form tambah produk
    Route::post('dashboard/books', [DashboardBookController::class, 'store'])->name('books.store'); // Simpan produk baru
    Route::get('dashboard/books/{id}', [DashboardBookController::class, 'show'])->name('books.show'); // Tampilkan detail produk
    Route::get('dashboard/books/{id}/edit', [DashboardBookController::class, 'edit'])->name('books.edit'); // Form edit produk
    Route::put('dashboard/books/{id}', [DashboardBookController::class, 'update'])->name('books.update'); // Update produk
    Route::delete('dashboard/books/{id}', [DashboardBookController::class, 'destroy'])->name('books.destroy'); // Hapus produk
    
});

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');