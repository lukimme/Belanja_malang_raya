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

        $newName = $request->oldimage;
        if ($request->file('gambar')) {
            $ekstensi = $request->file('gambar')->getClientOriginalExtension();
            $newName = 'banner'.now()->timestamp.'.'.$ekstensi;
            $request->file('gambar')->storeAs('img', $newName);
        }
        

       
       $banner->nama_gambar = $request->nama_gambar;
       $banner->gambar = $newName;
       $banner->link = $request->link;
       $banner->save();
       return redirect('/admin/banner')->with('success', 'Data berhasil di ubah!');
         
    }

    public function destroy($id_gambar)
    {
        $banner = Banner::findOrFail($id_gambar);
        $banner->delete();
        return back()->with('success', 'Data berhasil di hapus!');
        
    }
    
    
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
        'nama_gambar' => 'required | max:255',
        'link' => 'required | max:225',
        'id_gambar' => 'required',
        'id' => 'required',
        'status_gambar' => 'required',
        'gambar' => 'image|file |max: 1024',
        
        ]);

        
        
        // insert
        $ekstensi = $request->file('gambar')->getClientOriginalExtension();
        $newName = 'banner'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('img', $newName);

       $banner = new Banner;
       $banner->id = $request->id;
       $banner->nama_gambar = $request->nama_gambar;
       $banner->status_gambar = $request->status_gambar;
       $banner->gambar = $newName;
       $banner->link = $request->link;
       $banner->save();
       return back()->with('success', 'Upload Berhasil!'); 
       
    }
}
