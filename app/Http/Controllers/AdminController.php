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
        return view('/admin/login', ['adminList' => $admin]);
        dd();
        
    }

    function login(Request $request){

        

       $request->validate([
        'email' => 'required',
        'password' => 'required'
       ],[
        'email.required' => 'Email anda salah',
        'password.required' => 'Password anda salah'
       ]);


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
}
