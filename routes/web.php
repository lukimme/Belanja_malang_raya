<?php

use Illuminate\Support\Facades\Route;
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
Route::prefix('admin/')->group(function () {

    // Dashboard
    Route::get('', function () {
        return view('admin.dashboard');
    });
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });

    // Kategori
    Route::get('kategori', [KategoriController::class, 'index']);
    Route::post('kategori', [KategoriController::class, 'create']);
    Route::get('edit_kategori/{id}', [KategoriController::class, 'edit']);
    Route::put('kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');

    
    // Produk
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/add_produk', [ProdukController::class, 'tampil']);
    Route::post('/add_produk', [ProdukController::class, 'create']);
    Route::get('/edit_produk/{id}', [ProdukController::class, 'editProduk']);


    // Penjual
    Route::get('penjual', [PenjualController::class, 'index']);
    Route::post('penjual', [PenjualController::class, 'create']);

    //Adminstrator
    Route::get('administrator', function () {
        return view('admin.administrator');
    });

    //Akun
    Route::get('akun', function () {
        return view('admin.akun');
    });
    Route::get('administrator',[AdministratorController::class, 'create']);
    Route::get('banner',[BannerController::class, 'create']);
    Route::post('banner', [BannerController::class, 'store']);
    Route::get('banner-edit/{id_gambar}',[BannerController::class, 'edit']);
    Route::put('/banner/{id_gambar}', [BannerController::class, 'update']);
    Route::put('/banner/{id_gambar}', [IklanController::class, 'update2']);
    Route::delete('/banner/{id_gambar}', [BannerController::class, 'destroy'])->name('banner.delete');

 
    //Akun
    // Route::get('iklan', function () {
    //     return view('admin.iklan');
    // });
    Route::get('iklan',[IklanController::class, 'create2']);
    Route::post('iklan', [IklanController::class, 'store2']);

});

/*
|--------------------------------------------------------------------------
| Web Tampilan Belanja Malang
|--------------------------------------------------------------------------
 */

// Categories
Route::get('/categories', function () {
    return view('layout/categories');
});

// Fashion Categories
Route::get('/fashioncategories', function () {
    return view('layout/fashioncategories');
});

// Digital Categories
Route::get('/productdigital', function () {
    return view('layout/digitalproduct');
});

// aksesoris Categories
Route::get('/aksesoris', function () {
    return view('layout/aksesoris');
});

// ibu Anak
Route::get('/ibuanak', function () {
    return view('layout/ibuanak');
});

// Olahraga Categories
Route::get('/olahraga', function () {
    return view('layout/olahraga');
});

// Kuliner Categories
Route::get('/kuliner', function () {
    return view('layout/kuliner');
});

// Cart Categories
Route::get('/cart', function () {
    return view('layout/cart');
});

// ShowAllTerbaru
Route::get('/produkterbaru', function () {
    return view('layout/produkterbaru');
});

// ShowAllTerlaris
Route::get('/produkterlaris', function () {
    return view('layout/produkterlaris');
});

// ShowAllDiskon
Route::get('/produkdiskon', function () {
    return view('layout/produkdiskon');
});

// ShowAllFashion
Route::get('/showallfashion', function () {
    return view('layout/showallfashion');
});

// ShowAllKuliner
Route::get('/showallkuliner', function () {
    return view('layout/showallkuliner');
});

// Detail Product
Route::get('/detailproduct', function () {
    return view('layout/detailproduct');
});

// Detail Product
Route::get('/otoko', function () {
    return view('layout/otoko');
});

// Otoko Product
Route::get('/otokoproduct', function () {
    return view('layout/otokoproduct');
});

// Otoko Categories
Route::get('/otokocategories', function () {
    return view('layout/otokocategories');
});

// Belanja Malang
Route::get('/', function () {
    return view('index');
});
