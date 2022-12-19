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
        $admin      = admins::all();
        $kategori   = kategori::all();
        $penjual    = penjuals::all();
        return view('/admin/produk', ['produks' => $produk, 'admin' => $admin, 'kategori' => $kategori, 'penjual' => $penjual]);
    }


    public function create(Request $request) {

        // insert
        $ekstensi = $request->file('gambar')->getClientOriginalExtension();
        $newName = 'prod'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('img', $newName);

        $produk = new produks;
        $produk->id_penjual       = $request->penjual;
        $produk->id_kategori      = $request->kategori;
        $produk->id_admin         = $request->id_admin;
        $produk->nama_produk      = $request->nama;
        $produk->deskripsi_produk = $request->deskripsi;
        $produk->diskon           = $request->diskon;
        $produk->gambar           = $newName;
        $produk->pesan            = $request->pesan;
        $produk->save();
        return redirect('/admin/produk')->with('success', 'Upload berhasil!');

        // dd($request);

    }


    public function edit($id) {
        $produk     = produks::with('penjual', 'kategori', 'admin')->find($id);
        $penjual    = penjuals::where('id', '!=', $produk->id_penjual)->get(['id', 'nama_penjual']);
        $kategori   = kategori::where('id', '!=', $produk->id_kategori)->get(['id', 'nama_kategori']);
        $admin      = admins::where('id', '!=', $produk->id_admin)->get(['id', 'nama']);
        return view('/admin/edit_produk', ['produk' => $produk, 'penjual' => $penjual, 'kategori' => $kategori, 'admin' => $admin]);
    }


    public function update(Request $request, $id) {

        $newName = $request->oldimage;
        if ($request->file('gambar')) {
            $ekstensi = $request->file('gambar')->getClientOriginalExtension();
            $newName = 'prod'.now()->timestamp.'.'.$ekstensi;
            $request->file('gambar')->storeAs('img', $newName);
        }

        $produk = produks::find($id);
        $produk->id_penjual       = $request->penjual;
        $produk->id_kategori      = $request->kategori;
        $produk->id_admin         = $request->id_admin;
        $produk->nama_produk      = $request->nama;
        $produk->deskripsi_produk = $request->deskripsi;
        $produk->diskon           = $request->diskon;
        $produk->gambar           = $newName;
        $produk->pesan            = $request->pesan;
        $produk->save();
        return redirect('/admin/produk')->with('success', 'Data berhasil di ubah!');

    }


    public function detail($id) {

        $produk = produks::with('admin', 'penjual', 'kategori')->find($id);
        return view('/admin/detail_produk', ['produk' => $produk]);

    }


    public function destroy($id) {

        $produk = produks::findOrFail($id);

        $file = public_path('storage/img/'.$produk->gambar);
        if (file_exists($file)) {
            @unlink($file);
        }
        
        $produk->delete();
        return back()->with('success', 'Data berhasil di hapus!');
    }

}
