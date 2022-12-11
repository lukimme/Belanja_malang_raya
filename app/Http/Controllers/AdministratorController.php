<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\admins;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function create(){
        $administrator = Banner::all();
        $admin = admins::all();
        return view('/admin/administrator', ['administrator' => $administrator], ['admin' => $admin]);
    }  

}