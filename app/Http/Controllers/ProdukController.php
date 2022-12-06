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
        $kategori   = kategori::all();
        $penjual    = penjuals::all();
        return view('/admin/produk', ['kategoris' => $kategori], ['penjual' => $penjual]);
    }

    public function simpan(Request $request){
        dd($request);
    }

}
