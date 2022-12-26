<?php

namespace App\Http\Controllers;
use App\Models\admins;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    
    public function index() {
        $kategori = kategori::all();
        return view('/admin/kategori', ['kategoris' => $kategori]);
    }


    public function create(Request $request) {

        // insert
        $ekstensi = $request->file('foto_kategori')->getClientOriginalExtension();
        $newName = 'kat'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto_kategori')->storeAs('img', $newName);
        
        $kategori = new kategori;
        $kategori->id_admin = Auth::user()->id;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->foto_kategori = $newName;
        $kategori->save();
        return redirect('/admin/kategori')->with('success', 'Upload berhasil!');
    }


    // Detail kategori
    // public function detail($id) {

    //     $kategori = kategori::with('admin')->find($id);
    //     return view('/admin/detail_kategori', ['kategori' => $kategori]);
        
    // }

    
    // Edit kategori
    public function edit($id) {

        $kategori   = kategori::find($id);
        // $admin      = admins::where('id', '!=', $kategori->id_admin)->get(['id', 'nama']);
        return view('/admin/edit_kategori', ['kategoris' => $kategori]);

    }


    public function update(Request $request, $id) {

        $newName = $request->oldimage;
        if ($request->file('foto_kategori')) {
            $ekstensi = $request->file('foto_kategori')->getClientOriginalExtension();
            $newName = 'kat'.now()->timestamp.'.'.$ekstensi;
            $request->file('foto_kategori')->storeAs('img', $newName);
        }

        $kategori = kategori::find($id);
        $kategori->id_admin = Auth::user()->id;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->foto_kategori = $newName;
        $kategori->save();
        return redirect('/admin/kategori')->with('success', 'Data berhasil di ubah!');
    }


    // Delete
    public function destroy($id)
    {
        
        $kategori = kategori::findOrFail($id);

        $file = public_path('storage/img/'.$kategori->foto_kategori);
        if (file_exists($file)) {
            @unlink($file);
        }

        $kategori->delete(); 
        return back()->with('success', 'Data berhasil di hapus!');
        // dd($id);

    }

}
