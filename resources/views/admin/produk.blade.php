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
                  <form>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penjual:</label>
                        <div class="col-sm-10">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Penjual</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Nama:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Diskon:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kategori:</label>
                        <div class="col-sm-10">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Produk:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Nomor:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-4">
                        <label for="inputDate" class="col-sm-2 col-form-label">Pesan Produk:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" placeholder="Ketikkan deskripsi produk anda" name="" id="" cols="30" rows="10" required></textarea>
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

   <!-- Tables -->
   <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card table-responsive">
          <div class="card-body">
            <h5 class="card-title">Data produk</h5>
            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Penjual</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Diskon</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nomor</th>
                  <th scope="col">Pesan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Tomat</td>
                  <td>28%</td>
                  <td>Sayur</td>
                  <td><img src="" alt="">sdklvkd</td>
                  <td>12908</td>
                  <td>haloo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Brandon Jacob</td>
                  <td>Tomat</td>
                  <td>20%</td>
                  <td>Sayur</td>
                  <td><img src="" alt="">sdklvkd</td>
                  <td>12908</td>
                  <td>haloo</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Brandon Jacob</td>
                  <td>Tomat</td>
                  <td>30%</td>
                  <td>Sayur</td>
                  <td><img src="" alt="">sdklvkd</td>
                  <td>12908</td>
                  <td>haloo</td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section><!-- End Tables -->

@endsection