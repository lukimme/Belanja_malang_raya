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

{{-- {{$dol}} --}}
{{-- <br><br><br> --}}
{{-- {{$adminProduk}} --}}
{{-- <br><br><br> --}}
{{-- {{$kategoris}} --}}
{{-- <br><br><br> --}}
{{-- {{$produks}} --}}

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