<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;

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

Auth::routes();

Route::group(['middelware'=>['auth']], function(){
    Route::resource('users', UserController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('profil', ProfilController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
