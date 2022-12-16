<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\admins;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function create(){
        $banner = Banner::all();
        $admin = admins::all();
        return view('/admin/administrator', ['banner' => $banner], ['admin' => $admin]);
    }  

}