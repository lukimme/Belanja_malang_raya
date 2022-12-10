@extends('admin.layout.mainlayout')
@section('title', 'Kategori')


@section('content')

    <div class="pagetitle">
        <h1>Edit Kategori Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><span>Home</span></li>
            <li class="breadcrumb-item active">Kategori</li>
            <li class="breadcrumb-item active">Edit kategori</li>
          </ol>
        </nav>
    </div><!-- End Page Title -->

    {{$kategori}}
    {{-- <br><br>
    {{$admin}} --}}
    <br><br>
    {{$produk}}


      <!-- Form Input -->
      <section class="section dashboard">
        <div class="row justify-content-center">
    
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
    
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Masukkan data kategoris</h5>
        
                      <!-- General Form Elements -->
                      <form action="/admin/edit_kategori" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('put') --}}

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                          <div class="col-sm-10">
                            <input name="nama_kategori" type="text" class="form-control" value="{{$kategori->nama_kategori}}" required>
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label">Admin</label>
                          <div class="col-sm-10">
                            <select name="id_admin" class="form-select" aria-label="Default select example" required>


                              <option value=""></option>


                              {{-- @foreach ($admin as $data)
                              
                              <option value="{{$data->id}}">{{$data->nama}}</option>

                              @endforeach --}}
                            </select>
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar:</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input name="foto_kategori" class="form-control" type="file" id="pics" onchange="readUrl(this)" required>
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
        
                        <div class="row mb-4">
                          <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
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