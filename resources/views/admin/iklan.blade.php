@extends('admin.layout.mainlayout')
@section('title', 'Iklan')


@section('content')

    <div class="pagetitle">
        <h1>Setting Iklan</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><span>Home</span></li>
              <li class="breadcrumb-item"><span>Setting</span></li>
            <li class="breadcrumb-item active">Iklan</li>
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
                      <h5 class="card-title">Upload Iklan</h5>
        
                      

                      <!-- General Form Elements -->
                      <form method="POST" action="iklan" enctype="multipart/form-data">
                        @csrf
                      <div class="row mb-3">
                         
                        <label class="col-sm-2 col-form-label">Admin</label>
                        <div class="col-sm-10">
                          <select class="form-select @error('id') is-invalid @enderror" name="id" aria-label="Default select example">
                            
                            <option selected>Pilih Admin</option>
                            @foreach ($admin as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                          
                          </select>
                           @error('id')
                            <div class="invalid-feedback">
                            {{ 'Pilih admin tidak boleh kosong!' }}
                            </div>
                            @enderror
                        </div>
                    </div>
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" name="nama_gambar" class="form-control @error('nama_gambar') is-invalid @enderror">
                             @error('nama_gambar')
                            <div class="invalid-feedback">
                            {{ 'Nama tidak boleh kosong!' }}
                            </div>
                            @enderror
                          </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                           <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_gambar" id="gridRadios1" value="1"  required>
                      <label class="form-check-label" for="gridRadios1">
                        Banner
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input @error('status_gambar') is-invalid @enderror" type="radio" name="status_gambar" id="gridRadios2" value="2" checked  >
                      <label class="form-check-label" for="gridRadios2">
                        Iklan
                      </label>
                          @error('status_gambar')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>
                        </div>
                    </div>

                      <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Link</label>
                          <div class="col-sm-10">
                            <input type="text" name="link" class="form-control form-control @error('link') is-invalid @enderror" >
                             @error('link')
                            <div class="invalid-feedback">
                            {{ 'Link tidak boleh kosong!' }}
                            
                            </div>
                            @enderror
                          </div>
                        </div>

                          <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                                <input name="gambar" class="form-control @error('gambar') is-invalid @enderror" type="file" id="pict" onchange="readUrl(this)">
                                
                              <div class="input-group-append">
                                <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                              </div>
                                 @error('gambar')
                            <div class="invalid-feedback">
                            {{ 'Yang kamu upload Bukan gambar / Gambar masih kosong!' }}
                            
                            </div>
                            @enderror
                           
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
                     @foreach ($iklan as $item)
                      <tr>
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
                     <form action="{{ route('banner.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('delete') 
                          <a href="banner-edit/{{$item->id}}" class="btn btn-primary m-1" title="Edit">Edit</a>  
                      <input class="btn btn-danger m-1 delete" data-id="{{$item->id}}" data-nama="{{$item->nama_gambar}}" value="Hapus" type="submit" >
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