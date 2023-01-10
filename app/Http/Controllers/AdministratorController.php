<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function create(){
        $banner = Banner::all();
        $admin = User::all();
        return view('/admin/administrator', ['banner' => $banner], ['admin' => $admin]);
    }  

}