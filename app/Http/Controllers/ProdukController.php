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
        $produk     = produks::all();
        return view('/admin/produk', ['produks' => $produk]);
    }

    public function tampil() {
        $penjual    = penjuals::all();
        $kategori   = kategori::all();
        return view('/admin/add_produk', ['penjual' => $penjual], ['kategori' => $kategori]);
    }

    public function create(Request $request) {
        dd($request);
    }

}
