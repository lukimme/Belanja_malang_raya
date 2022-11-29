<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\admins;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(){
        $banner = Banner::all();
        $admin = admins::all();
        return view('/admin/banner', ['banner' => $banner], ['admin' => $admin]);
    }
  
   
    public function store(Request $request)
    {   

       $banner = new Banner;
       $banner->id_admin = $request->id_admin;
       $banner->nama_gambar = $request->nama;
       $banner->status_gambar = $request->status_gambar;
       $banner->gambar = $request->image;
       $banner->link = $request->link;
       $banner->save();
    }

}
