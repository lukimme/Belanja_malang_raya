@extends('admin.layout.mainlayout')
@section('title', 'Edit Banner')


@section('content')

    <div class="pagetitle">
        <h1>Edit Banner & Iklan</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><span>Home</span></li>
            <li class="breadcrumb-item active">Edit Banner & Iklan</li>
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
                      <h5 class="card-title">Edit Banner & Iklan</h5>
        
                      <!-- General Form Elements -->
                      <form action="/admin/banner/{{$banner->id}}" method="POST"  enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                    {{-- <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Admin</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="id_admin" aria-label="Default select example" required>
                            <option selected>Pilih Admin</option>
                            @foreach ($admin as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div> --}}
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" name="nama_gambar" class="form-control" value="{{$banner->nama_gambar}}" required>
                          </div>
                        </div>

                        {{-- <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                           <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_gambar" id="gridRadios1" value="1"  checked required>
                      <label class="form-check-label" for="gridRadios1">
                        Banner
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_gambar" id="gridRadios2" value="2" required>
                      <label class="form-check-label" for="gridRadios2">
                        Iklan
                      </label>
                    </div>
                        </div>
                    </div> --}}

                      <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Link</label>
                          <div class="col-sm-10">
                            <input type="text" name="link" class="form-control" value="{{$banner->link}}"  required>
                          </div>
                        </div>


                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input type="hidden" name="oldimage" value="{{$banner->gambar}}"><br>
                              <input name="gambar" class="form-control" type="file" id="pict" onchange="readUrl(this)">
                              <div class="input-group-append">
                                <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="row mb-2">
                          <div class="col-sm-12 text-center">
                            <img class="border border-primary" id="gam" width="200" src="{{asset('storage/img/'.$banner->gambar)}}" alt="">
                          </div>
                        </div>
                        
                        <div class="row mb-4 text-end">
                          <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Edit</button>
                          </div>
                        </div>
                      </form>

                      
        
                    </div>
                  </div>
    
            </div>
          </div><!-- End Left side columns -->
    
        </div>
       </section><!-- End Form Input -->

      
              </div>
            </div>
  
          </div>
        </div>
      </section><!-- End Tables -->

  @endsection