@extends('admin.layout.mainlayout')
@section('title', 'Detail Kategori')


@section('content')

    <div class="pagetitle">
      <h1>Detail Kategori</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Kategori</li>
          <li class="breadcrumb-item active">Detail kategori</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{asset('storage/img/'.$kategori->foto_kategori)}}" alt="{{$kategori->nama_kategori}}" title="{{$kategori->nama_kategori}}">
              <h2>{{$kategori->nama_kategori}}</h2>
            @foreach ($kategori->admin as $item)
                <h3>{{$item->nama}}</h3>
            @endforeach

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
                  <h5 class="card-title">Detail {{$kategori->nama_kategori}}</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Penambah</div>
                    @foreach ($kategori->admin as $item)
                    <div class="col-lg-9 col-md-8">{{$item->nama}}</div>
                    @endforeach
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama kategori</div>
                    <div class="col-lg-9 col-md-8">{{$kategori->nama_kategori}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Ditambahkan</div>
                    <div class="col-lg-9 col-md-8">{{$kategori->created_at}}</div>
                  </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection