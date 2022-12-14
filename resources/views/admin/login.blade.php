<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Belanja Malang - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{('/img/favicon.png')}}" rel="icon">
  <link href="{{('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{('/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{('/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{('/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{('/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{('/css/style.css')}}" rel="stylesheet">

  <!-- Sambungan ke link untuk teks area -->

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


    <main>
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                      <img src="assets/img/logo.png" alt="">
                      <span class="d-none d-lg-block">Belanja Malang</span>
                    </a>
                  </div><!-- End Logo -->
    
                  <div class="card mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login dengan akun anda</h5>
                        <p class="text-center small">Masukkan username & password anda untuk masuk</p>
                      </div>
    
                      <form class="row g-3" action="/admin/login" method="POST">
                        @csrf
    
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Username</label>
                          <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="username" id="yourUsername" required>
                            <div class="invalid-feedback">Please enter your username.</div>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" placeholder="password" id="yourPassword" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
    
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Login</button>
                        </div>
                      </form>
    
                    </div>
                  </div>

                  @if (Session::has('status'))
                      <div class="alert alert-primary" role="alert">
                        {{Session::get('message')}}
                      </div>
                  @endif
    
                  <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">YuktiWebDeveloper</a>
                  </div>
    
                </div>
              </div>
            </div>
    
          </section>

          @include('sweetalert::alert')
    
        </div>
      </main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">YuktiWebDeveloper</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{('/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{('/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{('/vendor/quill/quill.min.js')}}"></script>
  <script src="{{('/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{('/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{('/vendor/php-email-form/validate.js')}}"></script>

  {{-- jQuery --}}
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  {{-- SweetAlert --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <!-- Template Main JS File -->
  <script src="{{('/js/main.js')}}"></script>

  <!-- Javascript untuk textarea -->


  <!-- Javascript untuk gambar di input -->
  <script>
    var a = document.getElementById("gam");
    function readUrl(input){
      if(input.files){
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload=(e)=>{
          a.src = e.target.result;
        }
      }
    }

    function hapus() {
      document.getElementById("gam").src = '';
      document.getElementById("pics").value = '';
    }

    var b = document.getElementById("gambar");
    function readURL(input){
      if(input.files){
        var reade = new FileReader();
        reade.readAsDataURL(input.files[0]);
        reade.onload=(e)=>{
          b.src = e.target.result;
        }
      }
    }

    function dele() {
      document.getElementById("gambar").src = '';
      document.getElementById("picture").value = '';
    }
  </script>


  {{-- SweetAlert Delete Script--}}     
  <script>
 
 $('.delete').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Yakin?`,
          text: "Data yang akan di hapus tidak bisa dikembalikan lagi!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            form.submit();   
          } else {
            swal("Data tidak jadi dihapus");
          }
      });
  });


  </script>

  <!-- JS show passowrd -->
  <script>
    // membuat fungsi change
    function change() {

    // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
    var x = document.getElementById('pass').type;

    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
    if (x == 'password') {

        //ubah form input password menjadi text
        document.getElementById('pass').type = 'text';
        
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = `<i class="bi bi-eye-slash-fill fs-5"></i>`;
    }
    else {

        //ubah form input password menjadi text
        document.getElementById('pass').type = 'password';

        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = `<i class="bi bi-eye-fill fs-5"></i>`;
      }
    }
  </script>
  {{-- end show password  --}}

</body>

</html>