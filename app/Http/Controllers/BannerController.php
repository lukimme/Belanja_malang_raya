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

    public function edit(Request $request, $id_gambar)
    {   
        $banner = Banner::findOrFail($id_gambar);
        return view('admin/banner-edit', ['banner' => $banner]);
    }

    public function update(Request $request, $id_gambar)
    {   
        $banner = Banner::findOrFail($id_gambar);

         // insert
        $ekstensi = $request->file('gambar')->getClientOriginalExtension();
        $newName = 'banner'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('img', $newName);

       
       $banner->nama_gambar = $request->nama_gambar;
       $banner->gambar = $newName;
       $banner->link = $request->link;
       $banner->save();
       return redirect('/admin/banner');
         
    }

    public function destroy($id_gambar)
    {
        $banner = Banner::findOrFail($id_gambar);
        $banner->delete();
        return redirect('/admin/banner');
    }
    
    
    public function store(Request $request)
    {   
        // insert
        $ekstensi = $request->file('gambar')->getClientOriginalExtension();
        $newName = 'banner'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('img', $newName);

       $banner = new Banner;
       $banner->id = $request->id_admin;
       $banner->nama_gambar = $request->nama_gambar;
       $banner->status_gambar = $request->status_gambar;
       $banner->gambar = $newName;
       $banner->link = $request->link;
       $banner->save();
       return redirect('/admin/banner');
    }

}
