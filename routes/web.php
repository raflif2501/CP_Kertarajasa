<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('/');
Route::get('/daniel', [App\Http\Controllers\WelcomeController::class, 'daniel'])->name('daniel');
Route::get('/detail/{id}', [WelcomeController::class, 'detail'])->name('detail');
Route::get('/spesifikasi/{id}', [WelcomeController::class, 'spesifikasi'])->name('spesifikasi');
Route::get('/allberita', [WelcomeController::class, 'berita'])->name('berita');
Route::get('/allproduk', [WelcomeController::class, 'produk'])->name('produk');
Route::get('/cariberita',[WelcomeController::class, 'cari'])->name('cari');
Route::get('/cariproduks',[WelcomeController::class, 'carip'])->name('carip');
Route::get('/details/{id}', [WelcomeController::class, 'details'])->name('details');
Route::get('/spesifikasis/{id}', [WelcomeController::class, 'spesifikasis'])->name('spesifikasis');

Auth::routes();

Route::group(['middelware'=>['auth']], function(){
    Route::resource('users', UserController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('profil', ProfilController::class);
    Route::get('/cariberitaa',[BeritaController::class, 'cari'])->name('cariberita');
    Route::get('/cariproduk',[ProdukController::class, 'cari'])->name('cariproduk');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
