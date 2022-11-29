<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\admins;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(){
        $admin = admins::all();
        $banner = Banner::all();
        return view('/admin/banner', ['enum' => $banner], ['admin' => $admin]);
    }
  
   
    public function store(Request $request)
    {   

       $banner = new Banner;
       $banner->id_admin = $request->select;
       $banner->nama_gambar = $request->nama;
       $banner->status_gambar = $request->status_gambar;
       $banner->gambar = $request->image;
       $banner->link = $request->link;
       $banner->save();
    }

}
