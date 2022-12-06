<?php

namespace App\Http\Controllers;

use App\Models\admins;
use App\Models\produks;
use App\Models\kategori;
use App\Models\penjuals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    
    public function index() {
        $produk     = produks::all();
        $penjual    = penjuals::all();
        return view('/admin/produk',['dol' => $penjual], ['produks' => $produk]);
    }

    public function tampil() {
        $kategori   = kategori::all();
        return view('/admin/produk', ['kategoris' => $kategori]);
    }
    public function show(){
        $penjual = penjuals::all();
        $kategori = kategori::all();
        return view('/admin/add_produk', ['penjual' => $penjual], ['kategori' => $kategori]);
    }
    public function simpan(Request $request){
        dd($request);
    }

}
