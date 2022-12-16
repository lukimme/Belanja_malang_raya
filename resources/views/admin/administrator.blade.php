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
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../asset/img/admin.png" alt="Profile" class="rounded-circle">
              <h2>Admin</h2>
              <h3>super Admin</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

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
                   <form>
                        <h5 class="card-title">Tambah</h5>
        
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Sandi</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                         
                        <label class="col-sm-2 col-form-label">Status Admin</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="id" aria-label="Default select example" required>
                            <option selected>Pilih Admin</option>
                            {{-- @foreach ($admin as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach --}}
                          
                          </select>
                        </div>
                    </div>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Foto:</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile">
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
                    <tr>
                      <th scope="row">1</th>
                      <td>Jhon</td>
                      <td>Super Admin</td>
                      <td>Admin</td>
                      <td><img style="height: 40px" src="../asset/img/admin.png" alt=""></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Elly</td>
                      <td>Sub Admin</td>
                      <td>Ellysh</td>
                      <td><img style="height: 40px" src="../asset/img/admin.png" alt=""></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ashleigh</td>
                      <td>Sub Admin</td>
                      <td>Ashle</td>
                      <td><img style="height: 40px" src="../asset/img/admin.png" alt=""></td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
                 

            </div>
          </div>

        </div>
      </div>
    </section>



  

  @endsection