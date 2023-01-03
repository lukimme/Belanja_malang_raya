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
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Edit Profil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ganti Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                   <form>
                        <br>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Foto profile</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        </div>
        
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> parent of d971488... pemberian hak akses
                          <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" value="{{$admin->name}}">
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Email</label>
<<<<<<< HEAD
>>>>>>> parent of d971488... pemberian hak akses
=======
>>>>>>> parent of d971488... pemberian hak akses
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-4 text-end">
                          <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
        
                      </form>

                </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password saat ini</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password baru</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Konfirmasi password baru</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>
                 

            </div>
          </div>

        </div>
      </div>
    </section>

  

  @endsection