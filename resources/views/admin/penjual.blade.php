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
                    <h5 class="card-title">General Form Elements</h5>
      
                    <!-- General Form Elements -->
                    <form>

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nomor:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control">
                          </div>
                      </div>

                      {{-- <!-- <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Sandi:</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control">
                        </div>
                      </div> --> --}}

                      <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Foto penjual:</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="formFile">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Alamat:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Brand penjual:</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="formFile">
                        </div>
                      </div>
      
                      <div class="row mb-3 text-end">
                        <div class="col-sm-12 ">
                          <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                      </div>
      
                    </form><!-- End General Form Elements -->
      
                  </div>
              </div>
  
          </div>
        </div><!-- End Left side columns -->
  
      </div>
  </section><!-- End Form Input -->

  {{$adminP->nama}}


  <!-- Tables -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card table-responsive">
          <div class="card-body">
            <h5 class="card-title">Tabel penjual</h5>
            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Penambah</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nomor</th>
                  <th scope="col">Email</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Brand</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($penjual as $item)

                <tr>
                  <th scope="row">{{$loop->iteration}}</th>

                  {{-- @foreach ($adminP as $name)
                    <td><p class="m-2">{{$name->nama}}</p></td>
                    
                  @endforeach --}}


                  <td>{{$item->nama_penjual}}</td>
                  <td>{{$item->nomor_penjual}}</td>
                  <td>{{$item->email_penjual}}</td>
                  <td>{{$item->foto}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->brand_penjual}}</td>
                </tr>

                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section><!-- End Tables -->

@endsection