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

        // insert
        $ekstensi = $request->file('gambar')->getClientOriginalExtension();
        $newName = 'prod'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('img', $newName);

        $produk = new produks;
        $produk->id_penjual       = $request->penjual;
        $produk->id_kategori      = $request->kategori;
        $produk->id               = $request->id_admin;
        $produk->nama_produk      = $request->nama;
        $produk->deskripsi_produk = $request->deskripsi;
        $produk->diskon           = $request->diskon;
        $produk->gambar           = $newName;
        $produk->pesan            = $request->pesan;
        $produk->save();
        return redirect('/admin/produk');

        // dd($request);

    }


    public function editProduk(Request $request, $id) {
        // $penjual    = penjuals::all();
        // $kategori   = kategori::all();
        $produk = produks::findOrFail($id);
        return view('/admin/edit_produk', ['produk' => $produk]);
    }

}
