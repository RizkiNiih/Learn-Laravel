<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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

Route::get('give-permission-to-role', function () {
    $role       = Role::findOrFail(3); //moderator
    $permission1 = Permission::findOrFail(1); //create article
    $permission2 = Permission::findOrFail(2); //edit article
    $permission3 = Permission::findOrFail(3); //delete article
    $role->givePermissionTo([$permission1, $permission2, $permission3]);

});

Route::get('assign-role-to-user', function () {
    $user = User::create([
        'name'      => 'user multiple role',
        'email'     => 'user@gmail.com',
        'password'  => '$2y$10$I6utG4cLro1zSHdhbGZmZerujCiEC9fA/71ottdRhFq6UbZNxLZo2'
    ]);
    $role1 = Role::findOrFail(1); //author
    $role2 = Role::findOrFail(2); //editor
    $role3 = Role::findOrFail(3); //moderator
    $user->assignRole([$role1, $role2, $role3]);

});

Route::get('spatie-method', function () {
    $user = User::findOrFail(3);
    dd($user->getPermissionsViaRoles());
});

// // Menggunakan laravel spatie permission sesuai dengan deafult midlleware
// // Cara login pada user tanpa perlu membuat form login
// // $user = User::findOrFail(3);
// // Auth::login($user); //login sebagai user id 3
// // Auth::logout();

// Route::get('create-article', function () {
//     dd('Ini adalah fitur create article, hanya bisa diakses oleh author atau moderator');
// })->middleware('can:create article');

// Route::get('edit-article', function () {
//     dd('Ini adalah fitur edit article, hanya bisa diakses oleh edit atau moderator');
// })->middleware('can:edit article');

// Route::get('delete-article', function () {
//     dd('Ini adalah fitur delete article, hanya bisa diakses oleh moderator');
// })->middleware('can:delete article');

// Menggunakan laravel spatie permission sesuai dengan package middleware
// Cara login pada user tanpa perlu membuat form login
// $user = User::findOrFail(3);
// Auth::login($user); //login sebagai user id 3
Auth::logout();

// Route::get('create-article', function () {
//     dd('Ini adalah fitur create article, hanya bisa diakses oleh author atau moderator');
// })->middleware('role:author|moderator');

// Route::get('edit-article', function () {
//     dd('Ini adalah fitur edit article, hanya bisa diakses oleh edit atau moderator');
// })->middleware('role:editor|moderator');

// Route::get('delete-article', function () {
//     dd('Ini adalah fitur delete article, hanya bisa diakses oleh moderator');
// })->middleware('role:delete|moderator');

// contoh diatas tadi itu adalah dapat menggunakan middleware role berdasarkan rolenya

// contoh yang dapat menggunakan middleware role apa saja yang dapat mengakses article
Route::get('create-article', function () {
    dd('Ini adalah fitur create article, hanya bisa diakses oleh author atau moderator');
})->middleware('permission:create article');

Route::get('edit-article', function () {
    dd('Ini adalah fitur edit article, hanya bisa diakses oleh edit atau moderator');
})->middleware('permission:edit article');

Route::get('delete-article', function () {
    dd('Ini adalah fitur delete article, hanya bisa diakses oleh moderator');
})->middleware('permission:delete article');
