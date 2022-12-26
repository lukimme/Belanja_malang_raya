<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(){

        $admin = User::all();
        $roles = roles::all();
        return view('/admin/administrator', ['admin' => $admin, 'role' => $roles]);
        
    }

    public function create(Request $request) {

        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $newName = 'admin'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto')->storeAs('img', $newName);

        $admin = new User;
        $admin->id_role = $request->status;
        $admin->name    = $request->nama;
        $admin->email   = $request->email;
        $admin->foto    = $newName;
        $admin->password   = Hash::make($request->password);
        $admin->save();
        return back()->with('success', 'Upload berhasil!');

    }


    public function detail($id) {

        $admin = User::with('roles')->find($id);
        return view('/admin/detail_administrator', ['admin' => $admin]);

    }

    
    public function edit() {

        $admin = User::with('roles')->find(Auth::user()->id);
        $roles = roles::where('id', '!=', $admin->id_role)->get(['id', 'nama']);
        return view('/admin/akun', ['admin' => $admin, 'role' => $roles]);

    }


    public function update(Request $request) {

        $newName = $request->oldimage;
        if ($request->file('foto')) {
            $ekstensi = $request->file('foto')->getClientOriginalExtension();
            $newName = 'admin'.now()->timestamp.'.'.$ekstensi;
            $request->file('foto')->storeAs('img', $newName);
        }

        $admin = User::find(Auth::user()->id);
        $admin->id_role = $request->status;
        $admin->name    = $request->nama;
        $admin->email   = $request->email;
        $admin->foto    = $newName;
        $admin->save();
        return redirect('/admin/akun')->with('success', 'Data berhasil di ubah!');

    }

}
