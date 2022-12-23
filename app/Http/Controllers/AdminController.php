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

    
    // Login
    public function viewLogin() {

        return view('/admin/login_admin');

    }

    public function login(Request $request) {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Username wajib diisi!',
            'password.required' => 'Password wajib diisi!'
        ]);


        $infoLogin = admins::get([
            'email' => $request->username,
            'sandi' => $request->password
        ]);

        if (Auth::attempt($infoLogin)) {
            return 'sukses';
        }else {
            return 'gagal';
        }

    }
    
}
