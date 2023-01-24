<?php

namespace App\Http\Controllers;

use App\Models\produks;
use App\Models\kategori;
use App\Models\penjuals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{

    
    public function index() {
        $produk     = produks::all();
        $kategori   = kategori::all();
        $penjual    = penjuals::all();
        return view('/admin/produk', ['produks' => $produk, 'kategori' => $kategori, 'penjual' => $penjual]);
    }


    public function create(Request $request) {

        $images = [];

        foreach ($request->file('images') as $image) {
            $eks =  $image->getClientOriginalExtension();
            $filename = 'produk-' . uniqid() . '.' . $eks;
            $image->move(public_path().'/storage/produk/',$filename);
            array_push($images, $filename);
        
        }
        
        $json = json_encode($images);

        $produk = new produks;
        $produk->id_penjual       = $request->penjual;
        $produk->id_kategori      = $request->kategori;
        $produk->id_admin         = Auth::user()->id;
        $produk->nama_produk      = $request->nama;
        $produk->deskripsi_produk = $request->deskripsi;
        $produk->harga            = $request->harga;
        $produk->diskon           = $request->diskon;
        $produk->gambar           = $json;
        $produk->pesan            = $request->pesan;
        $produk->save();
    
        return redirect('/admin/produk')->with('success', 'Upload berhasil!');

    }


    public function edit($id) {
        $produk     = produks::with('penjual', 'kategori', 'admin')->find($id);
        $penjual    = penjuals::where('id', '!=', $produk->id_penjual)->get(['id', 'nama_penjual']);
        $kategori   = kategori::where('id', '!=', $produk->id_kategori)->get(['id', 'nama_kategori']);
        return view('/admin/edit_produk', ['produk' => $produk, 'penjual' => $penjual, 'kategori' => $kategori]);
        // return view('admin.layout.mainlayout', ['produk' => $produk]);
    }


    public function update(Request $request, $id) {

        $produk = produks::find($id);
        $produk->id_penjual       = $request->penjual;
        $produk->id_kategori      = $request->kategori;
        $produk->id_admin         = Auth::user()->id;
        $produk->nama_produk      = $request->nama;
        $produk->deskripsi_produk = $request->deskripsi;
        $produk->harga            = $request->harga;
        $produk->diskon           = $request->diskon;


        $foto = $request->file('photos');
        if ($foto) {

            $images = (array) json_decode($produk->gambar);
            
            foreach ($foto as $image) {
                
                $eks = $image->getClientOriginalExtension();
                $filename = 'produk-' . uniqid() . '.' . $eks;
                $image->move(public_path().'/storage/produk/',$filename);
                array_push($images, $filename);

            }

            

            $json = json_encode($images);

            $produk->gambar = $json;

        }else{

            $old = $request->oldimage;
            $produk->gambar = $old;

        }

        
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
