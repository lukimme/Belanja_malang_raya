@extends('admin.layout.mainlayout')
@section('title', 'Kategori')


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
    {{-- {{$enum}} --}}
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
                      <form method="post" action="banner" enctype="multipart/form-data">
                        @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Admin</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="id_admin" aria-label="Default select example">
                            <option selected>Pilih Admin</option>
                            @foreach ($admin as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                           <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_gambar" id="gridRadios1" value="option1"  checked>
                      <label class="form-check-label" for="gridRadios1">
                        Banner
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_gambar" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Iklan
                      </label>
                    </div>
                        </div>
                    </div>

                      <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Link</label>
                          <div class="col-sm-10">
                            <input type="text" name="link" class="form-control">
                          </div>
                        </div>


                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                          <div class="col-sm-10">
                            <input class="form-control" name="image" type="file" id="formFile">
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
                <h5 class="card-title">Tabel Banner</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Admin</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Super Admin</td>
                      <td>Brandon Jacob</td>
                      <td>Designer</td>
                      <td>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="reset" class="btn btn-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Sub Admin</td>
                      <td>Bridie Kessler</td>
                      <td>Developer</td>
                       <td>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="reset" class="btn btn-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Super Admin</td>
                      <td>Ashleigh Langosh</td>
                      <td>Finance</td>
                       <td>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="reset" class="btn btn-danger">Delete</button>
                      </td>
                    </tr>
                     <tr>
                      <th scope="row">3</th>
                      <td>Sub Admin</td>
                      <td>Ashleigh Langosh</td>
                      <td>Finance</td>
                       <td>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="reset" class="btn btn-danger">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section><!-- End Tables -->

  @endsection