@extends('admin.layout.mainlayout')
@section('title', 'Edit Penjual')


@section('content')

    <div class="pagetitle">
    <h1>Edit Penjual</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Penjual</li>
        <li class="breadcrumb-item active">Edit penjual</li>
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
                  <h5 class="card-title">Edit data penjual</h5>
    
                  <!-- General Form Elements -->
                  <form action="/admin/penjual/{{$penjual->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" value="{{$penjual->nama_penjual}}" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Nomor:</label>
                      <div class="col-sm-10">
                        <input type="text" name="nomor" value="{{$penjual->nomor_penjual}}" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" value="{{$penjual->email_penjual}}" class="form-control">
                        </div>
                    </div>

                    {{-- <!-- <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Sandi:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control">
                      </div>
                    </div> --> --}}

                    <div class="row mb-4">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Foto penjual:</label>
                      <div class="col-sm-10">
                        <div class="input-group form-outline">
                          <input type="hidden" name="oldimage" value="{{$penjual->foto}}">
                          <input name="foto" class="form-control" type="file" id="pics" onchange="readUrl(this)">
                          <div class="input-group-append">
                            <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-sm-12 text-center">
                        <img id="gam" width="200" src="{{asset('storage/penjual/'.$penjual->foto)}}" alt="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Alamat:</label>
                      <div class="col-sm-10">
                        <input type="text" name="alamat" value="{{$penjual->alamat}}" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Brand penjual:</label>
                      <div class="col-sm-10">
                        <div class="input-group form-outline">
                          <input type="hidden" name="oldimage2" value="{{$penjual->brand_penjual}}">
                          <input name="brand" class="form-control" type="file" id="picture" onchange="readURL(this)">
                          <div class="input-group-append">
                            <button type="button" class="btn btn-danger" onclick="dele()">Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-sm-12 text-center">
                        <img id="gambar" width="200" src="{{asset('storage/brandPenjual/'.$penjual->brand_penjual)}}" alt="">
                      </div>
                    </div>
    
                    <div class="row mb-3 text-end">
                      <div class="col-sm-12 ">
                        <button type="submit" class="btn btn-primary">Edit Penjual</button>
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