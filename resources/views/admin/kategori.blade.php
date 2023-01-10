@extends('admin.layout.mainlayout')
@section('title', 'Kategori')


@section('content')

    <div class="pagetitle">
        <h1>Kategori Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><span>Home</span></li>
            <li class="breadcrumb-item active">Kategori</li>
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
                      <h5 class="card-title">Masukkan data kategoris</h5>
        
                      <!-- General Form Elements -->
                      <form action="kategori" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                          <div class="col-sm-10">
                            <input name="nama_kategori" type="text" class="form-control" required>
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar:</label>
                          <div class="col-sm-10">
                            <div class="input-group form-outline">
                              <input name="foto_kategori" class="form-control" type="file" id="pics" onchange="readUrl(this)" required>
                              <div class="input-group-append">
                                <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col-sm-12 text-center">
                            <img id="gam" width="200" src="" alt="">
                          </div>
                        </div>
        
                        <div class="row mb-4">
                          <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
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
                <h5 class="card-title">Tabel data kategori</h5>
  
                <!-- Default Accordion -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Tabel kategori
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
                                  <th scope="col">Uploader</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Gambar</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($kategoris as $item)
                                  <tr>

                                  <th scope="row"><p class="m-2">{{$loop->iteration}}</p></th>
                                  @foreach ($item->admin as $admin)

                                    <td><p class="m-2">{{$admin->name}}</p></td>

                                  @endforeach
                                  <td><p class="m-2">{{$item->nama_kategori}}</p></td>
                                  <td>
                                    {{-- {{$item->foto_kategori}} --}}
                                  <img class="m-2" src="{{asset('storage/img/'.$item->foto_kategori)}}" width="70" alt="">
                                  </td>
                                  <td>
                                    <form action="{{ route('kategori.delete', $item->id) }}" method="POST">
                                      @csrf
                                      @method('delete')

                                      <a href="edit_kategori/{{$item->id}}" class="btn btn-primary m-1" title="Edit {{$item->nama_kategori}}">
                                        <i class="bi bi-pencil-square fs-6"></i>
                                      </a>

                                      {{-- <a href="detail_kategori/{{$item->id_kategori}}" class="btn btn-labeled btn-primary m-1" title="Detail {{$item->nama_kategori}}">
                                        <i class="bi bi-card-list fs-6 btn-label"></i>Detail
                                      </a> --}}

                                      <button type="submit" data-id="{{$item->id}}" data-name="{{$item->nama_kategori}}" class="btn btn-danger m-1 delete" value="hapus" title="Hapus {{$item->nama_kategori}}">
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