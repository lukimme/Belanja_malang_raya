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
        $kategori   = DB::table('kategoris')->get();
        $produk     = DB::table('produks')->get();
        $penjual    = DB::table('penjuals')->get();
        return view('/admin/produk',['dol' => $penjual], ['kategori' => $kategori], ['produks' => $produk]);
    }

    // public function tampil() {
    //     return view('/admin/produk',);
    // }


}
