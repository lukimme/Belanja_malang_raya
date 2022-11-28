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
                      <h5 class="card-title">Masukkan data kategori</h5>
        
                      <!-- General Form Elements -->
                      <form action="" method="post">

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-5">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar:</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        </div>
        
                        <div class="row mb-4">
                          <div class="col-sm-10 text-end">
                            <button type="submit" class="btn btn-primary">Show All Kategori</button>
                          </div>
                          <div class="col-sm-2 text-end">
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
                                  <th scope="col">Admin</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Gambar</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  @foreach ($kategoriList as $item)

                                  <th scope="row">{{$loop->iteration}}</th>
                                  <td>{{$item->kategoris->nama}}</td>
                                  <td>{{$item->nama_kategori}}</td>
                                  <td>{{$item->foto_kategori}}</td>

                                  @endforeach
                                </tr>
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