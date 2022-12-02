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
        $ekstensi = $request->file('foto_kategori')->getClientOriginalExtension();
        $newName = 'kat'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto_kategori')->storeAs('img', $newName);
    }
}
