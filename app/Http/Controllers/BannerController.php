<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\admins;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(){
        $banner = Banner::select('*')->where('status_gambar','banner')->get();
        $admin = admins::all();
        return view('/admin/banner', ['banner' => $banner], ['admin' => $admin]);
    }
    
     

    public function edit(Request $request, $id)
    {   
        $banner = Banner::findOrFail($id);
        return view('admin/banner-edit', ['banner' => $banner]);
    }

    public function update(Request $request, $id)
    {   
        $banner = Banner::findOrFail($id);

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
        'id' => 'required | integer',  
        'nama_gambar' => 'required | max:255',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',   
        'status_gambar' => 'required',
        'link' => 'required | max:225',
        ]);
        
        
        // insert
        $ekstensi = $request->file('gambar')->getClientOriginalExtension();
        $newName = 'banner'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('img', $newName);

       $banner = new Banner;
       $banner->id_admin = $request->id;
       $banner->nama_gambar = $request->nama_gambar;
       $banner->status_gambar = $request->status_gambar;
       $banner->gambar = $newName;
       $banner->link = $request->link;
    //    dd($banner);
       $banner->save();
       return back()->with('success', 'Upload Berhasil!'); 
       
    }
}
