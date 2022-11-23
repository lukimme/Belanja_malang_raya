@extends('admin.layout.mainlayout')
@section('title', 'Kategori')


@section('content')

    <div class="pagetitle">
        <h1>Setting Banner</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><span>Home</span></li>
              <li class="breadcrumb-item"><span>Setting</span></li>
            <li class="breadcrumb-item active">Banner</li>
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
                      <h5 class="card-title">Upload gambar banner</h5>
        
                      <!-- General Form Elements -->
                      <form>

                        <div class="row mb-4">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-4">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        </div>
        
                        <div class="row mb-4 text-end">
                          <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Upload</button>
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
                <h5 class="card-title">Tabel Banner</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Gambar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Brandon Jacob</td>
                      <td>Designer</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Bridie Kessler</td>
                      <td>Developer</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ashleigh Langosh</td>
                      <td>Finance</td>
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