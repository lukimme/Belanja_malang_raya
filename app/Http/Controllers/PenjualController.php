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
        return view('/admin/penjual', ['penjual' => $penjual], ['adminPenjual' => $admin]);
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
        $penjual->id = $request->id_admin;
        $penjual->nama_penjual = $request->nama;
    }
}
