<?php

namespace App\Http\Controllers;

use App\Models\admins;
use App\Models\penjuals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualController extends Controller
{
    public function index() {
        $penjual = penjuals::all();
        return view('/admin/penjual', ['penjual' => $penjual]);
    }

    public function create(Request $request) {

        // foto_penjual
        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $newNamePenjual = 'fotopenjual'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto')->storeAs('penjual', $newNamePenjual);

        // brand_penjual
        $ekstensi = $request->file('brand')->getClientOriginalExtension();
        $newNameBrand = 'brandpenjual'.now()->timestamp.'.'.$ekstensi;
        $request->file('brand')->storeAs('brandPenjual', $newNameBrand);

        $penjual = new penjuals;
        $penjual->id_admin      = Auth::user()->id;
        $penjual->nama_penjual  = $request->nama;
        $penjual->brand_penjual = $newNameBrand;
        $penjual->nomor_penjual = $request->nomor;
        $penjual->email_penjual = $request->email;
        $penjual->sandi         = '';
        $penjual->foto          = $newNamePenjual;
        $penjual->alamat        = $request->alamat;
        $penjual->save();
        return back()->with('success', 'Upload Berhasil!');
    }


    // Update
    public function edit($id) {

        $penjual = penjuals::with('admin')->find($id);
        // $admin   = admins::where('id', '!=', $penjual->id_admin)->get(['id', 'nama']);
        return view('/admin/edit_penjual', ['penjual' => $penjual]);

    }

    public function update(Request $request, $id)
    {
        
        $newNameFoto = $request->oldimage;
        if ($request->file('foto')) {
            $ekstensi = $request->file('foto')->getClientOriginalExtension();
            $newNameFoto = 'fotopenjual'.now()->timestamp.'.'.$ekstensi;
            $request->file('foto')->storeAs('penjual', $newNameFoto);
        }

        $newNameBrand = $request->oldimage2;
        if ($request->file('brand')) {
            $ekstensi = $request->file('brand')->getClientOriginalExtension();
            $newNameBrand = 'brandpenjual'.now()->timestamp.'.'.$ekstensi;
            $request->file('brand')->storeAs('brandPenjual', $newNameBrand);
        }

        $penjual = penjuals::find($id);
        $penjual->id_admin      = Auth::user()->id;
        $penjual->nama_penjual  = $request->nama;
        $penjual->brand_penjual = $newNameBrand;
        $penjual->nomor_penjual = $request->nomor;
        $penjual->email_penjual = $request->email;
        $penjual->sandi         = '';
        $penjual->foto          = $newNameFoto;
        $penjual->alamat        = $request->alamat;
        $penjual->save();
        return redirect('/admin/penjual')->with('success', 'Data berhasil di ubah!');

    }


    public function destroy($id)
    {
        $penjual = penjuals::findOrFail($id);

        $fileBrand = public_path('storage/brandPenjual/'.$penjual->brand_penjual);
        $fileFoto = public_path('storage/penjual/'.$penjual->foto);
        if (file_exists($fileBrand) && file_exists($fileFoto)) {
            @unlink($fileBrand);
            @unlink($fileFoto);
        }

        $penjual->delete();
        return back()->with('success', 'Data berhasil di hapus!');
    }


    // Detail
    public function detail($id) {

        $penjual = penjuals::with('admin')->find($id);
        return view('/admin/detail_penjual', ['penjual' => $penjual]);

    }
}
