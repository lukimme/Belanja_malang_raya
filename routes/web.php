<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenjualController;

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

// ----Admin----
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

    // Produk
    // Route::get('/produk', function () {
    //     return view('admin.produk');
    // });
    
    Route::get('produk', function () {
        return view('admin.produk');
    });


    // Penjual
    Route::get('penjual', [PenjualController::class, 'index']);

    //Adminstrator
    Route::get('administrator', function () {
        return view('admin.administrator');
    });

    //Akun
    Route::get('akun', function () {
        return view('admin.akun');
    });

    Route::get('banner',[BannerController::class, 'create']);
    Route::post('banner', [BannerController::class, 'store']);

 
    //Akun
    Route::get('iklan', function () {
        return view('admin.iklan');
    });

});

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
