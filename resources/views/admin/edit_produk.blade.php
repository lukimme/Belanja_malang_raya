@extends('admin.layout.mainlayout')
@section('title', 'Edit Produk')

@section('content')

<div class="pagetitle">
    <h1>Edit Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><span>Home</span></li>
        <li class="breadcrumb-item active">Produk</li>
        <li class="breadcrumb-item active">Edit produk</li>
      </ol>
    </nav>
</div><!-- End Page Title -->



@php
// var_dump($item->gambar);
    $produk1 = (array) json_decode($produk->gambar);
    $g = $produk1;
    // $tot = count($g);
    var_dump($g);
@endphp


<section class="section dashboard">
    <div class="row justify-content-center">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Edit data produk</h5>
    
                  <!-- General Form Elements -->
                  <form action="/admin/produk/{{$produk->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penjual:</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="penjual" aria-label="Default select example">

                            @foreach ($produk->penjual as $item)
                            <option value="{{$item->id}}">{{$item->nama_penjual}}</option>
                            @endforeach

                            @foreach ($penjual as $data)
                                <option value="{{$data->id}}">{{$data->nama_penjual}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" value="{{$produk->nama_produk}}">
                      </div>
                    </div> 

                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Diskon:</label>
                      <div class="col-sm-10">
                        <input type="text" name="diskon" class="form-control" value="{{$produk->diskon}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kategori:</label>
                        <div class="col-sm-10">
                          <select class="form-select" name="kategori" aria-label="Default select example">
                            @foreach ($produk->kategori as $item)
                            <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                            @endforeach


                            @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>


                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Gambar Produk:</label>
                      <div class="col-sm-10">
                        {{-- <input type="text" name="lama" value="{{$produk->gambar}}"> --}}
                        <div class="input-images-2" style="padding-top: .5rem;"></div>
                      </div>
                    </div>

                    
                    <!-- End CSS multiple image -->
                    <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Harga:</label>
                      <div class="col-sm-10">
                        <input type="text" name="harga" class="form-control" value="{{$produk->Harga}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Pesan Produk:</label>
                      <div class="col-sm-10">
                        <input type="text" name="pesan" class="form-control py-2" value="{{$produk->pesan}}">
                      </div>
                    </div>

                    <div class="row mb-4">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Produk:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{{$produk->deskripsi_produk}}</textarea>
                        </div>
                    </div>
    
                    <div class="row mb-3 text-end">
                      <div class="col-sm-12 ">
                        <button type="submit" class="btn btn-primary">Edit produk</button>
                      </div>
                    </div>
    
                  </form><!-- End General Form Elements -->
    
                </div>
            </div>

        </div>
      </div><!-- End Left side columns -->

    </div>
   </section><!-- End Form Input -->

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="{{('/js/image-uploader.min.js')}}"></script>

   <script>
    let preloaded = [

      <?php foreach($g as $gm){ ?>

        {id: '<?= $gm ?>', src: 'http://127.0.0.1:8000/storage/produk/<?=$gm?>'},

      <?php }?>

    ];

      $('.input-images-2').imageUploader({
        preloaded: preloaded,
        imagesInputName: 'photos',
        preloadedInputName: 'oldimage',
      });
      </script>
      <!-- End CSS multiple image -->


   @include('sweetalert::alert')
   
@endsection