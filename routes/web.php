<?php

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

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class,'index']);
    Route::resource('kategori',\App\Http\Controllers\KategoriController::class);
    Route::resource('produk',\App\Http\Controllers\ProdukController::class);
    Route::resource('customer',\App\Http\Controllers\CustomerController::class);
    Route::resource('transaksi',\App\Http\Controllers\TransaksiController::class);
    Route::get('profil',[\App\Http\Controllers\UserController::class,'index']);
    Route::get('setting',[\App\Http\Controllers\UserController::class,'setting']);
    Route::get('laporan',[\App\Http\Controllers\LaporanController::class,'index']);
    Route::get('proseslaporan',[\App\Http\Controllers\LaporanController::class,'proses']);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);
Route::get('/about', [\App\Http\Controllers\HomepageController::class,'about']);
Route::get('/kontak', [\App\Http\Controllers\HomepageController::class,'kontak']);
Route::get('/kategori', [\App\Http\Controllers\HomepageController::class,'kategori']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
