<?php

namespace App\Http\Controllers;

use App\Models\admins;
use App\Models\penjuals;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function index() {
        $penjual = penjuals::all();
        $admin   = admins::all();
        return view('/admin/penjual', ['penjual' => $penjual], ['admin' => $admin]);
    }

    public function create(Request $request) {

        // foto_penjual
        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $newNamePenjual = 'fotopenjual'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto')->storeAs('img', $newNamePenjual);

        // brand_penjual
        $ekstensi = $request->file('brand')->getClientOriginalExtension();
        $newNameBrand = 'brandpenjual'.now()->timestamp.'.'.$ekstensi;
        $request->file('brand')->storeAs('img', $newNameBrand);

        $penjual = new penjuals;
        $penjual->id_admin            = $request->id_admin;
        $penjual->nama_penjual  = $request->nama;
        $penjual->brand_penjual = $newNameBrand;
        $penjual->nomor_penjual = $request->nomor;
        $penjual->email_penjual = $request->email;
        $penjual->sandi         = '';
        $penjual->foto          = $newNamePenjual;
        $penjual->alamat        = $request->alamat;
        $penjual->save();
        return redirect('/admin/penjual');
    }


    // Update
    public function edit($id) {

        $penjual = penjuals::with('admin')->find($id);
        $admin   = admins::where('id', '!=', $penjual->id_admin)->get(['id', 'nama']);
        return view('/admin/edit_penjual', ['penjual' => $penjual], ['admin' => $admin]);

    }
}
