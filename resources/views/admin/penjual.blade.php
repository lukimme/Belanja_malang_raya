@extends('admin.layout.mainlayout')
@section('title', 'Penjual')


@section('content')

<div class="pagetitle">
    <h1>Penjual</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Penjual</li>
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
                    <h5 class="card-title">Tambah data penjual</h5>
      
                    <!-- General Form Elements -->
                    <form action="penjual" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Admin</label>
                        <div class="col-sm-10">
                          <select name="id_admin" class="form-select" aria-label="Default select example" required>
                            <option selected>--pilih--</option>
                            @foreach ($admin as $data)
                            
                            <option value="{{$data->id}}">{{$data->nama}}</option>

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
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nomor:</label>
                        <div class="col-sm-10">
                          <input type="text" name="nomor" class="form-control">
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
                          <div class="col-sm-10">
                            <input type="email" name="email" class="form-control">
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
                            <input name="foto" class="form-control" type="file" id="pics" onchange="readUrl(this)" required>
                            <div class="input-group-append">
                              <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                          <img class="border border-primary" id="gam" width="200" src="" alt="">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Alamat:</label>
                        <div class="col-sm-10">
                          <input type="text" name="alamat" class="form-control">
                        </div>
                      </div>

                      <div class="row mb-4">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Brand penjual:</label>
                        <div class="col-sm-10">
                          <div class="input-group form-outline">
                            <input name="brand" class="form-control" type="file" id="picture" onchange="readURL(this)" required>
                            <div class="input-group-append">
                              <button type="button" class="btn btn-danger" onclick="dele()">Hapus</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                          <img class="border border-primary" id="gambar" width="200" src="" alt="">
                        </div>
                      </div>
      
                      <div class="row mb-3 text-end">
                        <div class="col-sm-12 ">
                          <button type="submit" class="btn btn-primary">Tambah Penjual</button>
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
            <h5 class="card-title">Tabel data penjual</h5>

            <!-- Default Accordion -->
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Tabel penjual
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
                              <th scope="col">Penambah</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Brand</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($penjual as $item)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
            
                                @foreach ($item->admin as $admin)
                                <td>{{$admin->nama}}</td>
                                @endforeach
            
                              <td><p class="">{{$item->nama_penjual}}</p></td>
                              <td>
                                <img src="{{asset('storage/img/'.$item->brand_penjual)}}" width="95%" alt="">
                              </td>
                              <td>

                                <form action="{{ route('penjual.delete', $item->id) }}" method="POST">
                                  @csrf
                                  @method('delete')

                                <a href="edit_penjual/{{$item->id}}" class="btn btn-primary m-1" title="Edit {{$item->nama_penjual}}">
                                  <i class="bi bi-pencil-square"></i>
                                </a>

                                <a href="detail_penjual/{{$item->id}}" class="btn btn-primary m-1" title="Detail {{$item->nama_penjual}}">
                                  <i class="bi bi-card-list"></i>
                                </a>

                                <button type="submit" data-id="{{$item->id}}" data-name="{{$item->nama_penjual}}" class="btn btn-danger m-1 delete" title="Hapus {{$item->nama_penjual}}">
                                  <i class="bx bxs-trash"></i>
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