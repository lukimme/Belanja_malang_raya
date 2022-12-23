<?php

namespace App\Http\Controllers;
use App\Models\roles;
use App\Models\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(){

        $admin = admins::all();
        $roles = roles::all();
        return view('/admin/administrator', ['admin' => $admin, 'role' => $roles]);
        
    }

    public function create(Request $request) {

        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $newName = 'admin'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto')->storeAs('img', $newName);

        $admin = new admins;
        $admin->id_role = $request->status;
        $admin->nama    = $request->nama;
        $admin->email   = $request->email;
        $admin->sandi   = Hash::make($request->password);
        $admin->foto    = $newName;
        $admin->save();
        return back()->with('success', 'Upload berhasil!');

    }

    
    // Login
    public function viewLogin() {

        return view('/admin/login_admin');

    }

    
    
}
