<?php

namespace App\Http\Controllers;
use App\Models\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(){

        $admin = admins::all();
        return view('/admin/administrator', ['admin' => $admin]);
        
    }

    public function create(Request $request) {

        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $newName = 'admin'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto')->storeAs('img', $newName);

        $admin = new admins;
        $admin->nama    = $request->nama;
        $admin->email   = $request->email;
        $admin->sandi   = Hash::make($request->password);
        $admin->foto    = $newName;
        $admin->status  = $request->status;
        $admin->save();
        return back()->with('success', 'Upload berhasil!');

    }
    
}
