<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\admins;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(){
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $banner = Banner::all();
=======
        $banner = Banner::select('*')->where('status_gambar','banner')->get();
>>>>>>> parent of d971488... pemberian hak akses
=======
        $banner = Banner::select('*')->where('status_gambar','banner')->get();
>>>>>>> parent of d971488... pemberian hak akses
=======
        $banner = Banner::select('*')->where('status_gambar','banner')->get();
>>>>>>> parent of d971488... pemberian hak akses
=======
        $banner = Banner::select('*')->where('status_gambar','banner')->get();
>>>>>>> parent of d971488... pemberian hak akses
=======
        $banner = Banner::select('*')->where('status_gambar','banner')->get();
>>>>>>> parent of d971488... pemberian hak akses
        $admin = admins::all();
        return view('/admin/banner', ['banner' => $banner], ['admin' => $admin]);
    }
    
     

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function edit(Request $request, $id_gambar)
=======
    public function edit(Request $request, $id)
>>>>>>> parent of d971488... pemberian hak akses
=======
    public function edit(Request $request, $id)
>>>>>>> parent of d971488... pemberian hak akses
=======
    public function edit(Request $request, $id)
>>>>>>> parent of d971488... pemberian hak akses
=======
    public function edit(Request $request, $id)
>>>>>>> parent of d971488... pemberian hak akses
=======
    public function edit(Request $request, $id)
>>>>>>> parent of d971488... pemberian hak akses
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
       $banner->id = $request->id;
=======
       $banner->id_admin = $request->id;
>>>>>>> parent of d971488... pemberian hak akses
=======
       $banner->id_admin = $request->id;
>>>>>>> parent of d971488... pemberian hak akses
=======
       $banner->id_admin = $request->id;
>>>>>>> parent of d971488... pemberian hak akses
=======
       $banner->id_admin = $request->id;
>>>>>>> parent of d971488... pemberian hak akses
=======
       $banner->id_admin = $request->id;
>>>>>>> parent of d971488... pemberian hak akses
       $banner->nama_gambar = $request->nama_gambar;
       $banner->status_gambar = $request->status_gambar;
       $banner->gambar = $newName;
       $banner->link = $request->link;
    //    dd($banner);
       $banner->save();
       return back()->with('success', 'Upload Berhasil!'); 
       
    }
}
