@extends('admin.layout.mainlayout')
@section('title', 'administrator')


@section('content')

  
    <div class="pagetitle">
      <h1>Administrator</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Halaman</li>
          <li class="breadcrumb-item active">Administrator</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Tambah Admin</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Data Admin</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                   <form action="administrator" method="POST" enctype="multipart/form-data">
                    @csrf

                        <h5 class="card-title">Tambah</h5>
        
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                          <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" required>
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Username:</label>
                          <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" required>
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Sandi:</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input type="password" name="password" class="form-control" id="pass" required>
                              <span class="input-group-text" id="mybutton" onclick="change()" style="background-color: #adb5bd; cursor: pointer;">
                                <i class="bi bi-eye-fill fs-5"></i>
                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status Admin:</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="status" aria-label="Default select example" required>
                            <option selected>Pilih Admin</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Sub Admin</option>
                            <option value="3">Sub Admin 2</option>
                          </select>
                        </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Foto:</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input name="foto" class="form-control" type="file" id="pics" onchange="readUrl(this)" required>
                              <div class="input-group-append">
                                <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-12 text-center">
                            <img id="gam" width="200" src="" alt="">
                          </div>
                        </div>
        
                        <div class="row mb-4 text-end">
                          <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
        
                      </form>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Data Admin -->
                <table class="table datatable" id="tablee">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Status</th>
                      <th scope="col">Username</th>
                      <th scope="col">Profile</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($admin as $item) 
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$item->nama}}</td>
                      <td>{{$item->status}}</td>
                      <td>{{$item->email}}</td>
                      <td><img class="rounded-circle" style="height: 90px" src="{{asset('storage/img/'.$item->foto)}}" alt=""></td>
                      <td>
                        <form action="" method="POST">
                          @csrf
                          @method('delete')

                          <a href="" class="btn btn-primary m-1" title="Edit ">
                            <i class="bi bi-pencil-square fs-6"></i>
                          </a>

                          <a href="" class="btn btn-primary m-1" title="Detail ">
                            <i class="bi bi-card-list fs-6"></i>
                          </a>

                          <button type="submit" data-id="" data-name="" class="btn btn-danger m-1 delete" value="hapus" title="Hapus ">
                            <i class="bi bi-trash-fill fs-6"></i>
                          </button>

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