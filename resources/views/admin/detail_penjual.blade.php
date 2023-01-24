@extends('admin.layout.mainlayout')
@section('title', 'Detail Penjual')


@section('content')

<div class="pagetitle">
    <h1>Detail Penjual</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Penjual</li>
        <li class="breadcrumb-item active">Detail penjual</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->



  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{asset('storage/brandPenjual/'.$penjual->brand_penjual)}}" alt="brand {{$penjual->nama_penjual}}" title="brand {{$penjual->nama_penjual}}">
            <h2 class="mb-2">{{$penjual->nama_penjual}}</h2>
            <h3>Uploader: {{Auth::user()->name}}</h3>

            {{-- <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div> --}}
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body">
            <div class="tab-content">

              <div class="tab-pane fade show active profile-overview">
                <h5 class="card-title fs-4">Detail {{$penjual->nama_penjual}}</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Uploader</div>
                  @foreach ($penjual->admin as $item)
                  <div class="col-lg-9 col-md-8">{{$item->name}}</div>
                  @endforeach
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Nama penjual</div>
                  <div class="col-lg-9 col-md-8">{{$penjual->nama_penjual}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Nomor penjual</div>
                  <div class="col-lg-9 col-md-8">{{$penjual->nomor_penjual}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email penjual</div>
                    <div class="col-lg-9 col-md-8">{{$penjual->email_penjual}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat penjual</div>
                    <div class="col-lg-9 col-md-8">{{$penjual->alamat}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Foto penjual</div>
                    <div class="col-lg-9 col-md-8">
                        <img src="{{asset('storage/penjual/'.$penjual->foto)}}" width="30%" alt="{{$penjual->foto}}" title="{{$penjual->foto}}">
                    </div>
                </div>

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection