@extends('admin.layout.mainlayout')
@section('title', 'Edit Produk')

@section('content')

<div class="pagetitle">
    <h1>Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><span>Home</span></li>
        <li class="breadcrumb-item active">Produk</li>
        <li class="breadcrumb-item active">Edit produk</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

{{$produk}}

<section class="section dashboard">
    <div class="row justify-content-center">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">General Form Elements</h5>
    
                  <!-- General Form Elements -->
                  <form action="/admin/edit_produk" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penjual:</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="penjual" aria-label="Default select example">
                            <option selected>--Pilih--</option>
                            {{-- @foreach ($penjual as $data)
                                <option value="{{$data->id_penjual}}">{{$data->nama_penjual}}</option>
                            @endforeach --}}
                          </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" value="{{$produk->nama_produk}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Diskon:</label>
                      <div class="col-sm-10">
                        <input type="text" name="diskon" class="form-control" value="{{$produk->diskon}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="admin">Admin:</label>
                      <div class="col-sm-10">
                        <input type="text" name="id_admin" id="admin" class="form-control" value="{{$produk->id}}" required>
                      </div>
                  </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kategori:</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="kategori" aria-label="Default select example">
                            <option selected>--Pilih--</option>
                            {{-- @foreach ($kategori as $item)
                                <option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>
                            @endforeach --}}
                          </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Produk:</label>
                      <div class="col-sm-10">
                        <div class="input-group form-outline">
                          <input name="gambar" class="form-control" type="file" id="pics" value="{{$produk->gambar}}" onchange="readUrl(this)" required>
                          <div class="input-group-append">
                            <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-sm-12 text-center">
                        <img class="border border-primary" id="gam" width="200" src="" alt="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Pesan Produk:</label>
                      <div class="col-sm-10">
                        <input type="text" name="pesan" class="form-control" required>
                      </div>
                    </div>

                    <div class="row mb-4">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Produk:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"  required></textarea>
                        </div>
                    </div>
    
                    <div class="row mb-3 text-end">
                      <div class="col-sm-12 ">
                        <button type="submit" class="btn btn-primary">Tambah produk</button>
                      </div>
                    </div>
    
                  </form><!-- End General Form Elements -->
    
                </div>
            </div>

        </div>
      </div><!-- End Left side columns -->

    </div>
   </section><!-- End Form Input -->
@endsection