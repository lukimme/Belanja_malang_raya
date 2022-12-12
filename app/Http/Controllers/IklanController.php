<?php

namespace App\Http\Controllers;



use App\Models\Banner;
use App\Models\admins;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    public function create2(){
        $banner = Banner::all();
        $admin = admins::all();
        return view('/admin/iklan', ['banner' => $banner], ['admin' => $admin]);
    }  

     public function update2(Request $request, $id_gambar)
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
       return redirect('/admin/iklan')->with('success', 'Data berhasil di ubah!');
         
    }

    public function store2(Request $request)
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
        $newName = 'iklan'.now()->timestamp.'.'.$ekstensi;
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
