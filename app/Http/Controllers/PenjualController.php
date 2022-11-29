<?php

namespace App\Http\Controllers;

use App\Models\penjuals;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function index() {
        $penjual = penjuals::all();
        return view('/admin/penjual', ['penjual' => $penjual]);
    }
}
