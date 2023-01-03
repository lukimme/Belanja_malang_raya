@extends('admin.layout.mainlayout')
@section('title', 'Produk')

@section('content')

<div class="pagetitle">
    <h1>Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><span>Home</span></li>
        <li class="breadcrumb-item active">Produk</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<<<<<<< Updated upstream
{{-- {{$dol}} --}}
{{-- <br><br><br> --}}
{{-- {{$adminProduk}} --}}
{{-- <br><br><br> --}}
{{-- {{$kategoris}} --}}
{{-- <br><br><br> --}}
{{-- {{$produks}} --}}
=======
 <section class="section dashboard">
  <div class="row justify-content-center">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

          <div class="card">
              <div class="card-body">
                <h5 class="card-title">General Form Elements</h5>
  
                <!-- General Form Elements -->
                <form action="produk" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Penjual:</label>
                      <div class="col-sm-10">
                        <select class="form-select" name="penjual" aria-label="Default select example">
                          <option selected>--Pilih--</option>
                          @foreach ($penjual as $data)
                              <option value="{{$data->id}}">{{$data->nama_penjual}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Diskon:</label>
                    <div class="col-sm-10">
                      <input type="text" name="diskon" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Kategori:</label>
                      <div class="col-sm-10">
                        <select class="form-select" name="kategori" aria-label="Default select example">
                          <option selected>--Pilih--</option>
                          @foreach ($kategori as $item)
                              <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-12">
                      <div class="row mb-4 align-items-center">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Produk:</label>
                        <div class="col-">
                            <div class="input-group form-outline">
                                <input name="gambar" class="form-control" type="file" id="file-input" onchange="preview(this)" multiple>
                                <div class="input-group-append">
                                <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                          <button type="button" name="button" class="btn btn-primary btn-tambah"><i class="fa fa-plus"></i></button>
                          <button type="button" class="btn btn-danger btn-hapus" style="display:none;"><i class="fa fa-times"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
            
                <div class="row mb-2">
                    <div class="col-sm-10 text-center">
                      <p id="num-of-files"></p>
                      <div id="images" ></div>
                    </div>
                </div>

                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Harga:</label>
                    <div class="col-sm-10">
                      <input type="text" name="harga" class="form-control" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Pesan Produk:</label>
                    <div class="col-sm-10">
                      <input type="text" name="pesan" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-4">
                      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Produk:</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                      </div>
                  </div>
  
                  <div class="row mb-3 text-end">
                    <div class="col-sm-12 ">
                      <button type="submit" class="btn btn-primary">Tambah produk</button>
                    </div>
                  </div>
  
                </form><!-- End General Form Elements -->
  
              </div>
          </div>
>>>>>>> Stashed changes

   {{-- {{$produks}} --}}

   <!-- Tables -->
   <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">

        <div class="card">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-md-3 text-start">
                <h5 class="card-title">Tabel data produk</h5>
              </div>
              <div class="col-md-9 text-end">
                <a class="btn btn-primary" href="add_produk">Tambah produk</a>
              </div>
            </div>

            <!-- Default Accordion -->
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Tabel produk
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
          
                        <!-- Table with stripped rows -->
                      <div class="table-responsive">
                        <table class="table datatable">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Admin</th>
                              <th scope="col">Penjual</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Kategori</th>
                              <th scope="col">Gambar</th>
                              <th scope="col">Diskon</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                              
                            @foreach ($produks as $item)
                                
                              <tr>

                              <th scope="row"><p class="m-2"></p>{{$loop->iteration}}</th>

                                @foreach ($item->adminProduk as $adminProduks)
                                <td><p class="m-2">{{$adminProduks->nama}}</p></td>
                                @endforeach

                                @foreach ($item->penjualProduk as $penjualProduks)
                                <td><p class="m-2"></p>{{$penjualProduks->nama_penjual}}</td>
                                @endforeach

                                <td><p class="m-2">{{$item->nama_produk}}</p></td>

                                @foreach ($item->kategoriProduk as $kategoriProduks)
                                <td><p class="m-2">{{$kategoriProduks->nama_kategori}}</p></td>
                                @endforeach
                              

                              <td>
                              <img class="m-2" src="" width="70" alt="">
                              {{$item->gambar}}
                              </td>

                              <td><p class="m-2">{{$item->diskon}}</p></td>

                              <td>
                                <a href="edit_produk/{{$item->id_produk}}" class="btn btn-primary m-1" title="Edit {{$item->nama_produk}}"><i class="bi bi-pencil-square"></i></a>  <a href="#" class="btn btn-primary m-1" title="Detail {{$item->nama_produk}}"><i class="bi bi-card-list"></i></a>  <a href="#" class="btn btn-danger m-1" title="Hapus {{$item->nama_produk}}"><i class="bx bxs-trash"></i></a>
                              </td> 
                            </tr>

                            @endforeach
                          </tbody>
                        </table>
                      </div>
                        <!-- End Table with stripped rows -->
          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Default Accordion Example -->

          </div>
        </div>

      </div>
    </div>
    </div>
  </section><!-- End Tables -->

@endsection