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
        return view('/admin/kategori', ['kategoris' => $kategori], ['admin' => $admin]);
    }


    public function create(Request $request) {

        // insert
        $ekstensi = $request->file('foto_kategori')->getClientOriginalExtension();
        $newName = 'kat'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto_kategori')->storeAs('img', $newName);

        // $kategori['image'] = $newName;
        // $kategori = kategoris::create($request->all());
        
        $kategori = new kategori;
        $kategori->id_admin = $request->id_admin;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->foto_kategori = $newName;
        $kategori->save();
        return redirect('/admin/kategori');
    }

    
    // Edit kategori
    public function edit($id) {

        $kategori   = kategori::with('admin')->find($id);
        $admin      = admins::where('id', '!=', $kategori->id_admin)->get(['id', 'nama']);
        return view('/admin/edit_kategori', ['kategoris' => $kategori], ['admin' => $admin]);

    }


    public function update(Request $request, $id) {

        $newName = $request->oldimage;
        if ($request->file('foto_kategori')) {
            $ekstensi = $request->file('foto_kategori')->getClientOriginalExtension();
            $newName = 'kat'.now()->timestamp.'.'.$ekstensi;
            $request->file('foto_kategori')->storeAs('img', $newName);
        }

        $kategori = kategori::find($id);
        $kategori->id_admin = $request->id_admin;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->foto_kategori = $newName;
        $kategori->save();
        return redirect('/admin/kategori');
    }

}
