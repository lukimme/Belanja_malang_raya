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

        $penjual    = penjuals::all();
        $admin      = admins::all();
        return view('/admin/produk', ['adminProduk' => $admin],  ['dol' => $penjual]);
    }

    public function tampil() {
        $kategori   = kategori::all();
        $produk     = produks::all();
        return view('/admin/produk', ['produks' => $produk], ['kategoriProduk' => $kategori]);
    }


}
