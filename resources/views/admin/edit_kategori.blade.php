@extends('admin.layout.mainlayout')
@section('title', 'Edit Kategori')


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
    
      <!-- Form Input -->
      <section class="section dashboard">
        <div class="row justify-content-center">
    
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
    
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Edit data kategoris</h5>
        
                      <!-- General Form Elements -->
                      <form action="/admin/kategori/{{$kategoris->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                          <div class="col-sm-10">
                            <input name="nama_kategori" type="text" class="form-control" value="{{$kategoris->nama_kategori}}">
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar:</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input type="hidden" name="oldimage" value="{{$kategoris->foto_kategori}}">
                              <input name="foto_kategori" class="form-control" type="file" id="pics" onchange="readUrl(this)">
                              <div class="input-group-append">
                                <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-12 text-center">
                            <img id="gam" width="200" src="{{asset('storage/img/'.$kategoris->foto_kategori)}}" alt="">
                          </div>
                        </div>
        
                        <div class="row mb-4">
                          <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary">Edit Kategori</button>
                          </div>
                        </div>
        
                      </form><!-- End General Form Elements -->
        
                    </div>
                  </div>
    
            </div>
          </div><!-- End Left side columns -->
    
        </div>
       </section><!-- End Form Input -->

       @include('sweetalert::alert')

  @endsection