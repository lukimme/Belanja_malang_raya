<?php

namespace App\Http\Controllers;
use App\Models\admins;
use App\Models\produks;
use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    
    public function index() {
        $kategori = kategori::all();
        $admin= admins::all();
        return view('/admin/kategori', ['kategori' => $kategori], ['admin' => $admin]);
        // dd($kategori);
    }


    public function create(Request $request) {

        // insert
        $ekstensi = $request->file('foto_kategori')->getClientOriginalExtension();
        $newName = 'kat'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto_kategori')->storeAs('img', $newName);

        // $kategori['image'] = $newName;
        // $kategori = kategoris::create($request->all());
        
        $kategori = new kategori;
        $kategori->id = $request->id_admin;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->foto_kategori = $newName;
        $kategori->save();
        return redirect('/admin/kategori');
    }


    public function edit($id) {

        // $admin      = admins::with('kategoris')->find($id);
        $admin      = admins::all();
        $produk     = produks::all();
        $kategori   = kategori::with('admin')->find($id);
        // return view('/admin/edit_kategori', ['kategori' => $kategori], ['admin' => $admin]);
        return view('/admin/edit_kategori', compact('kategori'), compact('produk'));

    }

}
