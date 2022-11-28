<?php

namespace App\Http\Controllers;
use App\Models\kategoris;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    
    public function index() {
        $kategori = kategoris::with('kategoris')->get();
        return view('/admin/kategori', ['kategoriList' => $kategori]);
    }


    // public function create() {

    // }

}
