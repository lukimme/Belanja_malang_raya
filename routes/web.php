<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\KategoriController;

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
//     return view('home');
// });

/*
|--------------------------------------------------------------------------
| Web Tampilan Admin Belanja Malang
|--------------------------------------------------------------------------
 */
Route::prefix('/admin/')->group(function () {

    // Login
    Route::get('login', function () {
        return view('admin.login_admin');
    });


    // Dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });


    // Kategori
    Route::get('kategori', [KategoriController::class, 'index']);
    Route::post('kategori', [KategoriController::class, 'create']);
    // Route::get('detail_kategori/{id}', [KategoriController::class, 'detail']); //Detail kategori
    Route::get('edit_kategori/{id}', [KategoriController::class, 'edit']);
    Route::put('kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');

    
    // Produk
    Route::get('produk', [ProdukController::class, 'index']);
    Route::post('produk', [ProdukController::class, 'create']);
    Route::get('edit_produk/{id}', [ProdukController::class, 'edit']);
    Route::put('produk/{id}', [ProdukController::class, 'update']);
    Route::get('detail_produk/{id}', [ProdukController::class, 'detail']);
    Route::delete('produk/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');


    // Penjual
    Route::get('penjual', [PenjualController::class, 'index']);
    Route::post('penjual', [PenjualController::class, 'create']);
    Route::get('edit_penjual/{id}', [PenjualController::class, 'edit']);
    Route::put('penjual/{id}', [PenjualController::class, 'update']);
    Route::delete('penjual/{id}', [PenjualController::class, 'destroy'])->name('penjual.delete');
    Route::get('detail_penjual/{id}', [PenjualController::class, 'detail']);


    //Adminstrator
    Route::get('administrator', [AdminController::class, 'index']);
    Route::post('administrator', [AdminController::class, 'create']);

    //Akun
    Route::get('akun', function () {
        return view('admin.akun');
    });
    // Route::get('administrator',[AdministratorController::class, 'create']);
    Route::get('banner',[BannerController::class, 'create']);
    Route::post('banner', [BannerController::class, 'store']);
    Route::get('banner-edit/{id_gambar}',[BannerController::class, 'edit']);
    Route::put('banner/{id_gambar}', [BannerController::class, 'update']);
    Route::put('banner/{id_gambar}', [IklanController::class, 'update2']);
    Route::delete('banner/{id_gambar}', [BannerController::class, 'destroy'])->name('banner.delete');

 
    //Akun
    // Route::get('iklan', function () {
    //     return view('admin.iklan');
    // });
    Route::get('iklan',[IklanController::class, 'create2']);
    Route::post('iklan', [IklanController::class, 'store2']);

});

   

