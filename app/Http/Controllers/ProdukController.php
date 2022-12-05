<?php

namespace App\Http\Controllers;

use App\Models\admins;
use App\Models\produks;
use App\Models\kategori;
use App\Models\penjuals;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    
    public function index() {

        $dol    = penjuals::all();
        $kategori   = kategori::all();
        $admin      = admins::all();
        $produk     = produks::all();
        return view('/admin/produk', ['adminProduk' => $admin], ['kategoriProduk' => $kategori],  ['penjual' => $dol]);
        // ['produks' => $produk], ['adminProduk' => $admin], ['kategoriProduk' => $kategori],
    }


}
