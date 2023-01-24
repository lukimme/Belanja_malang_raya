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

 <section class="section dashboard">
  <div class="row justify-content-center">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

          <div class="card">
              <div class="card-body">
                <h5 class="card-title">General Form Elements</h5>
  
                <!-- General Form Elements -->
                <form action="produk" method="post" name="form-example-1" id="form-example-1" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Penjual:</label>
                      <div class="col-sm-10">
                        <select class="form-select" name="penjual" aria-label="Default select example" required>
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
                      <input type="text" name="nama" class="form-control" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Diskon:</label>
                    <div class="col-sm-10">
                      <input type="text" name="diskon" class="form-control" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Kategori:</label>
                      <div class="col-sm-10">
                        <select class="form-select" name="kategori" aria-label="Default select example" required>
                          <option selected>--Pilih--</option>
                          @foreach ($kategori as $item)
                              <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>

                  {{-- <div class="row mb-4">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Produk:</label>
                    <div class="col-sm-10">
                        <div class="input-group form-outline">
                            <input name="gambar" class="form-control" type="file" id="file-input" onchange="preview(this)" multiple>
                            <div class="input-group-append">
                            <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row mb-2">
                    <div class="col-sm-10 text-center">
                      <p id="num-of-files"></p>
                      <div id="images" ></div>
                    </div>
                </div> --}}

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Gambar Produk:</label>
                    <div class="col-sm-10">
                      <div class="input-images-1" style="padding-top: .5rem;"></div>
                      {{-- <input type="file" name="images[]" multiple> --}}
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
                      <input type="text" name="pesan" class="form-control"  required>
                    </div>
                  </div>

                  <div class="row mb-4">
                      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Produk:</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10" required></textarea>
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

      </div>
    </div><!-- End Left side columns -->

  </div>
  </section><!-- End Form Input -->

   <!-- Tables -->
   <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">

        <div class="card">
          <div class="card-body">
              <h5 class="card-title">Tabel data produk</h5>

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

                                @foreach ($item->penjual as $penjualProduks)
                                <td><p class="m-2"></p>{{$penjualProduks->nama_penjual}}</td>
                                @endforeach

                                <td><p class="m-2">{{$item->nama_produk}}</p></td>

                                @foreach ($item->kategori as $kategoriProduks)
                                <td><p class="m-2">{{$kategoriProduks->nama_kategori}}</p></td>
                                @endforeach
                              

                              <td>
                                @php
                                // var_dump($item->gambar);
                                    $gam = (array) json_decode($item->gambar);
                                    $g = $gam[0];
                                    // var_dump($g);
                                @endphp
                               
                                <img class="m-2" src="{{asset('storage/produk/'.$g)}}" width="70" alt="">
                              
                              </td>

                              <td><p class="m-2">{{$item->diskon}}</p></td>

                              <td>
                                <form action="{{ route('produk.delete', $item->id) }}" method="POST">
                                  @csrf
                                  @method('delete')

                                  <a href="edit_produk/{{$item->id}}" class="btn btn-primary m-1" title="Edit {{$item->nama_produk}}">
                                    <i class="bi bi-pencil-square"></i>
                                  </a>
                                  
                                  <a href="detail_produk/{{$item->id}}" class="btn btn-primary m-1" title="Detail {{$item->nama_produk}}">
                                    <i class="bi bi-card-list"></i>
                                  </a>

                                  <button type="submit" data-id="{{$item->id}}" data-name="{{$item->nama_produk}}" class="btn btn-danger m-1 delete" value="hapus" title="Hapus {{$item->nama_produk}}">
                                    <i class="bi bi-trash-fill fs-6"></i>
                                  </button>

                                </form>
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
  

  @include('sweetalert::alert')

@endsection