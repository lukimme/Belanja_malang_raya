@extends('admin.layout.mainlayout')
@section('title', 'Edit Admin')


@section('content')

  <div class="pagetitle">
    <h1>Edit Administrator</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><span>Home</span></li>
          <li class="breadcrumb-item"><span>Halaman</span></li>
        <li class="breadcrumb-item active">Administrator</li>
        <li class="breadcrumb-item active">Edit Administrator</li>
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
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Edit Admin</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 <form action="/admin/edit_admin/{{$admin->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <h5 class="card-title">Tambah</h5>
        
                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                          <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" value="{{$admin->name}}">
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Email:</label>
                          <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" value="{{$admin->email}}">
                          </div>
                        </div>

                        <input type="hidden" name="password" class="form-control" id="pass" value="{{$admin->password}}">

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nomor Telepon:</label>
                          <div class="col-sm-10">
                            <input type="text" name="nomor" class="form-control" value="{{$admin->nomor}}">
                          </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status Admin:</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="status" aria-label="Default select example">

                            @foreach ($admin->roles as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach


                            @foreach ($role as $item)
                              <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                            

                          </select>
                        </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Foto:</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input type="hidden" name="oldimage" value="{{$admin->foto}}">
                              <input name="foto" class="form-control" type="file" id="pics" onchange="readUrl(this)">
                              <div class="input-group-append">
                                <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-12 text-center">
                            <img id="gam" width="200" src="{{asset('storage/img/'.$admin->foto)}}" alt="">
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
                <form action="/admin/administrator" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Password lama:</label>
                    <div class="col-sm-10">
                      <div class="input-group form-outline">
                        <input type="password" name="password" class="form-control" id="pswrd">
                        <span class="input-group-text" id="btn" onclick="ganti()" style="background-color: #adb5bd; cursor: pointer;">
                          <i class="bi bi-eye-fill fs-5"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Password baru:</label>
                    <div class="col-sm-10">
                      <div class="input-group form-outline">
                        <input type="password" name="newpassword" class="form-control" id="password">
                        <span class="input-group-text" id="button" onclick="ubah()" style="background-color: #adb5bd; cursor: pointer;">
                          <i class="bi bi-eye-fill fs-5"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Konfirmasi password baru:</label>
                    <div class="col-sm-10">
                      <div class="input-group form-outline">
                        <input type="password" name="renewpassword" class="form-control" id="sandi">
                        <span class="input-group-text" id="tombol" onclick="rubah()" style="background-color: #adb5bd; cursor: pointer;">
                          <i class="bi bi-eye-fill fs-5"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  @if (Session::has('status'))
                    <div class="alert alert-primary" role="alert">
                      {{Session::get('message')}}
                    </div>
                  @endif

                  <div class="row mb-4 text-end">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </div>
                  </div>
                </form><!-- End Change Password Form -->

              <!-- End Table with stripped rows -->

               

          </div>
        </div>

      </div>
    </div>
  </section>

   @include('sweetalert::alert')

@endsection