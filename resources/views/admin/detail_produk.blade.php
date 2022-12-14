@extends('admin.layout.mainlayout')
@section('title', 'Detail Produk')

@section('content')

<div class="pagetitle">
    <h1>Detail Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><span>Home</span></li>
        <li class="breadcrumb-item active">Produk</li>
        <li class="breadcrumb-item active">Detail produk</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{asset('storage/img/'.$produk->gambar)}}" alt="{{$produk->nama_produk}}" title="{{$produk->nama_produk}}">
            <h2 class="mb-2">{{$produk->nama_produk}}</h2>
          @foreach ($produk->penjual as $item)
              <h3>{{$item->nama_penjual}}</h3>
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
                <h5 class="card-title">Detail {{$produk->nama_produk}}</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Uploader</div>
                  @foreach ($produk->admin as $item)
                  <div class="col-lg-9 col-md-8">{{$item->name}}</div>
                  @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Penjual</div>
                    @foreach ($produk->penjual as $item)
                    <div class="col-lg-9 col-md-8">{{$item->nama_penjual}}</div>
                    @endforeach
                  </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Nama kategori</div>
                    @foreach ($produk->kategori as $item)
                        <div class="col-lg-9 col-md-8">{{$item->nama_kategori}}</div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pesan produk</div>
                    <div class="col-lg-9 col-md-8">{{$produk->pesan}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Deskripsi produk</div>
                    <div class="col-lg-9 col-md-8">{{$produk->deskripsi_produk}}</div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Harga</div>
                    <div class="col-lg-9 col-md-8">Rp.{{$produk->Harga}}</div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Diskon</div>
                    <div class="col-lg-9 col-md-8">{{$produk->diskon}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Ditambahkan</div>
                  <div class="col-lg-9 col-md-8">{{$produk->created_at}}</div>
                </div>

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection