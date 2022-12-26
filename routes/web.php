<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\KategoriController;
use Doctrine\DBAL\Driver\Middleware;

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

/*
|--------------------------------------------------------------------------
| Web Tampilan Admin Belanja Malang
|--------------------------------------------------------------------------
 */
Route::prefix('admin/')->group(function () {

    // Login
    Route::get('login', [AuthController::class, 'login'])->name('login')->Middleware('guest');
    Route::post('login', [AuthController::class, 'autentikasi']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->middleware('auth');


    // Kategori
    Route::get('kategori', [KategoriController::class, 'index'])->middleware('auth');
    Route::post('kategori', [KategoriController::class, 'create'])->middleware('auth');
    // Route::get('detail_kategori/{id}', [KategoriController::class, 'detail'])->middleware('auth'); //Detail kategori
    Route::get('edit_kategori/{id}', [KategoriController::class, 'edit'])->middleware('auth');
    Route::put('kategori/{id}', [KategoriController::class, 'update'])->middleware('auth');
    Route::delete('kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete')->middleware('auth');

    
    // Produk
    Route::get('produk', [ProdukController::class, 'index'])->middleware('auth');
    Route::post('produk', [ProdukController::class, 'create'])->middleware('auth');
    Route::get('edit_produk/{id}', [ProdukController::class, 'edit'])->middleware('auth');
    Route::put('produk/{id}', [ProdukController::class, 'update'])->middleware('auth');
    Route::get('detail_produk/{id}', [ProdukController::class, 'detail'])->middleware('auth');
    Route::delete('produk/{id}', [ProdukController::class, 'destroy'])->name('produk.delete')->middleware('auth');


    // Penjual
    Route::get('penjual', [PenjualController::class, 'index'])->middleware('auth');
    Route::post('penjual', [PenjualController::class, 'create'])->middleware('auth');
    Route::get('edit_penjual/{id}', [PenjualController::class, 'edit'])->middleware('auth');
    Route::put('penjual/{id}', [PenjualController::class, 'update'])->middleware('auth');
    Route::delete('penjual/{id}', [PenjualController::class, 'destroy'])->name('penjual.delete')->middleware('auth');
    Route::get('detail_penjual/{id}', [PenjualController::class, 'detail'])->middleware('auth');


    //Administrator
    Route::get('administrator', [AdminController::class, 'index'])->middleware('auth');
    Route::post('administrator', [AdminController::class, 'create'])->middleware('auth');

    //Akun
    Route::get('akun', function () {
        return view('admin.akun');
    })->middleware('auth');

    // Banner
    // Route::get('administrator',[AdministratorController::class, 'create']);
    Route::get('banner',[BannerController::class, 'create'])->middleware('auth');
    Route::post('banner', [BannerController::class, 'store'])->middleware('auth');
    Route::get('banner-edit/{id}',[BannerController::class, 'edit'])->middleware('auth');
    Route::put('banner/{id}', [BannerController::class, 'update'])->middleware('auth');
    Route::put('banner/{id}', [IklanController::class, 'update2'])->middleware('auth');
    Route::delete('banner/{id}', [BannerController::class, 'destroy'])->name('banner.delete')->middleware('auth');

 
    //Akun
    // Route::get('iklan', function () {
    //     return view('admin.iklan');
    // });
    Route::get('iklan',[IklanController::class, 'create2'])->middleware('auth');
    Route::post('iklan', [IklanController::class, 'store2'])->middleware('auth');

});

   

