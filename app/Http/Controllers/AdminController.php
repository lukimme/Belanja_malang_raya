<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function status() {

        $admin = User::with('roles')->get(['nama']);
        return view('admin.layout.mainlayout', ['admin' => $admin]);

    }

    public function index(){

        $admin = User::all();
        $roles = roles::all();
        return view('/admin/administrator', ['admin' => $admin, 'role' => $roles]);
        
    }

    public function create(Request $request) {

        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $newName = 'admin'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto')->storeAs('admin', $newName);

        $admin = new User;
        $admin->id_role = $request->status;
        $admin->name    = $request->nama;
        $admin->email   = $request->email;
        $admin->nomor   = $request->nomor;
        $admin->foto    = $newName;
        $admin->password   = Hash::make($request->password);
        $admin->save();
        return back()->with('success', 'Upload berhasil!');

    }


    public function edit_admin($id) {

        $admin = User::with('roles')->find($id);
        $roles = roles::where('id', '!=', $admin->id_role)->get(['id', 'nama']);
        return view('/admin/edit_admin', ['admin' => $admin, 'role' => $roles]);

    }


    public function update_admin(Request $request, $id) {

        $newName = $request->oldimage;
        if ($request->file('foto')) {
            $ekstensi = $request->file('foto')->getClientOriginalExtension();
            $newName = 'admin'.now()->timestamp.'.'.$ekstensi;
            $request->file('foto')->storeAs('admin', $newName);
        }

        $admin = User::find($id);
        $admin->id_role = $request->status;
        $admin->name    = $request->nama;
        $admin->email   = $request->email;
        $admin->nomor   = $request->nomor;
        $admin->foto    = $newName;
        $admin->password= $request->password;
        $admin->save();
        return redirect('/admin/administrator')->with('success', 'Edit berhasil!');        

    }


    public function destroy($id) {

        $admin = User::findOrFail($id);

        $file = public_path('storage/admin/'.$admin->foto);
        if (file_exists($file)) {
            @unlink($file);
        }

        $admin->delete();
        return back()->with('success', 'Data berhasil di hapus!');

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
            $request->file('foto')->storeAs('admin', $newName);
        }


        $admin          = User::find(Auth::user()->id);

        if (Auth::user()->id_role != 1) {
            
        }else {
        $admin->id_role = $request->status;
        }

        $admin->name    = $request->nama;
        $admin->email   = $request->email;
        $admin->nomor   = $request->nomor;
        $admin->foto    = $newName;
        $admin->save();
        return back()->with('success', 'Data berhasil di ubah!');

    }


    // public function newPass(Request $request) {

    //     // dd($request);
    //     $validator = Validator::make($request->all(), [
    //         'password' => 'required',
    //         'newpassword' => 'required|confirmed',
    //         'renewpassword' => 'required',
    //     ]);


    //     $current_password = Auth::user()->password;
    //     if (Hash::check($request->password, $current_password)) {
    //         $user_id = Auth::user()->id;
    //         $obj_user = User::find($user_id);
    //         $obj_user->password = Hash::make($request->newpassword);
    //         $obj_user->save();
    //         return back()->with('success', 'Password changed successfully');
    //     } else{
    //         Session::flash('message', 'password anda salah!');
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    // }

}
