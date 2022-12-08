@extends('admin.layout.mainlayout')
@section('title', 'Banner')


@section('content')

    <div class="pagetitle">
        <h1>Setting Banner</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><span>Home</span></li>
              <li class="breadcrumb-item"><span>Setting</span></li>
            <li class="breadcrumb-item active">Banner</li>
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
                      <h5 class="card-title">Upload Banner</h5>
        
                      <!-- General Form Elements -->
                      <form method="POST" action="banner" enctype="multipart/form-data">
                        @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Admin</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="id_admin" aria-label="Default select example" required>
                            <option selected>Pilih Admin</option>
                            @foreach ($admin as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" name="nama_gambar" class="form-control" required>
                          </div>
                        </div>

                        <div class="row mb-3">
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
                    </div>

                      <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Link</label>
                          <div class="col-sm-10">
                            <input type="text" name="link" class="form-control" required>
                          </div>
                        </div>

                          <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input name="gambar" class="form-control" type="file" id="pict" onchange="readUrl(this)" required>
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
                        
                        <div class="row mb-4 text-end">
                          <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Upload</button>
                          </div>
                        </div>
                      </form>

                      
        
                    </div>
                  </div>
    
            </div>
          </div><!-- End Left side columns -->
    
        </div>
       </section><!-- End Form Input -->

       <!-- Tables -->
       <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card table-responsive">
              <div class="card-body">
                <h5 class="card-title">Table Banner & Iklan</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Admin</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Status</th>
                      <th scope="col">Link</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($banner as $item)
                      <tr>
                      <input type="hidden" class="delete_id" value="{{ $item->id_gambar }}">
                      <th scope="row"><p class="m-2">{{$loop->iteration}}</p></th>
                      
                      @foreach ($item->admin as $admin)
                      <td><p class="m-2">{{$admin->nama}}</p></td>
                      @endforeach
                      
                      <td><p class="m-2">{{$item->nama_gambar}}</p></td>
                       <td><p class="m-2">{{$item->status_gambar}}</p></td>
                       <td><p class="m-2">{{$item->link}}</p></td>
                      <td>
                      {{-- {{$item->foto_kategori}} --}}
                      <img class="m-2" src="{{asset('storage/img/'.$item->gambar)}}" width="70" alt="">
                      </td>
                      <td>
                      <form action="/admin/banner/{{$item->id_gambar}}" method="POST">
                        @csrf
                        @method('delete') 
                          <a href="banner-edit/{{$item->id_gambar}}" class="btn btn-primary m-1" title="Edit">Edit</a>  
                      <input class="btn btn-danger m-1 delete" data-id="{{$item->id_gambar}}" data-nama="{{$item->nama_gambar}}" value="Hapus" type="submit" >
                      </form>
                      </td> 
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

      @include('sweetalert::alert')



  @endsection