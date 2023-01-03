<?php

namespace App\Http\Controllers;
use App\Models\admins;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){

        // sama dengan "select * all"
        $admin = admins::all();
<<<<<<< HEAD
        return view('/admin/login', ['adminList' => $admin]);
        dd();
=======
        return view('/admin/administrator', ['admin' => $admin]);
>>>>>>> parent of 9e1a339... roles
        
    }

    function login(Request $request){

        

<<<<<<< HEAD
       $request->validate([
        'email' => 'required',
        'password' => 'required'
       ],[
        'email.required' => 'Email anda salah',
        'password.required' => 'Password anda salah'
       ]);
=======
        $admin = new admins;
        $admin->nama    = $request->nama;
        $admin->email   = $request->email;
        $admin->sandi   = Hash::make($request->password);
        $admin->foto    = $newName;
        $admin->status  = $request->status;
        $admin->save();
        return back()->with('success', 'Upload berhasil!');
>>>>>>> parent of 9e1a339... roles


       $infoLogin = [
        'email' => $request->email,
        'password' => $request->password
       ];


       if (Auth::attempt($infoLogin)) {

        return 'sukses';
        // dd($infoLogin);

       }else{

        return 'gagal';

       }

    }

<<<<<<< HEAD
=======
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
    
>>>>>>> parent of 9e1a339... roles
}
