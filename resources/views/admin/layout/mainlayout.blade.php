<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Belanja Malang - @yield('title')</title>
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

  <!-- CSS multiple image -->
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{('/css/image-uploader.min.css')}}">
  {{-- <link rel="stylesheet" href="{{('/css/image-uploader.css')}}"> --}}

  <!-- Template Main CSS File -->
  <link href="{{('/css/style.css')}}" rel="stylesheet">

  <style>

    input:focus {
        background-size: 100% 2px, 100% 1px;
        outline: 0 none;
        -webkit-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        border-bottom: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .input-field label {
        width: 100%;
        color: #9e9e9e;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        font-size: 1em;
        cursor: text;
        -webkit-transition: -webkit-transform .2s ease-out;
        transition: -webkit-transform .2s ease-out;
        -webkit-transform-origin: 0 100%;
        transform-origin: 0 100%;
        text-align: initial;
        -webkit-transform: translateY(7px);
        transform: translateY(7px);
        pointer-events: none;
    }

    input:focus + label {
        color: #2196f3;
    }

    .input-field {
        position: relative;
        margin-top: 2.2rem;
    }

    .input-field label.active {
        -webkit-transform: translateY(-15px) scale(0.8);
        transform: translateY(-15px) scale(0.8);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    .step {
        font-size: 1.6em;
        font-weight: 600;
        margin-right: .5rem;
    }


    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, .5);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal .content {
        background: #fff;
        display: inline-block;
        padding: 2rem;
        position: relative;
    }

    .modal .content h4 {
        margin-top: 0;
    }
  </style>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">BelanjaMalang</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('storage/admin/'.Auth::user()->foto)}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->name}}</h6>
              @foreach (Auth::user()->roles as $item)
                  <span>{{$item->nama}}</span>
              @endforeach
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/akun">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> --}}
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Input Data</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/kategori">
          <i class="bx bxs-category"></i>
          <span>Kategori</span>
        </a>
      </li><!-- End Kategori Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/produk">
          <i class="bx bxs-cart-alt"></i>
          <span>Produk</span>
        </a>
      </li><!-- End Produk Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/penjual">
          <i class="bi bi-file-person-fill"></i>
          <span>Penjual</span>
        </a>
      </li><!-- End Produk Page Nav -->

      {{-- Halaman --}}
      <li class="nav-heading">Halaman</li>

      @if (Auth::user()->id_role != 1)

      @else
       <li class="nav-item">
        <a class="nav-link collapsed" href="/administrator">
          <i class="bi bi-people"></i>
          <span>Administrator</span>
        </a>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link collapsed" href="/akun">
          <i class="bi bi-person"></i>
          <span>Akun</span>
        </a>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-gear"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/banner">
              <i class="bi bi-circle"></i><span>Banner</span>
            </a>
          </li>
          {{-- <li>
            <a href="/admin/iklan">
              <i class="bi bi-circle"></i><span>Iklan Masyarakat</span>
            </a>
          </li> --}}
        </ul>
      </li>

      {{-- End Halaman --}}

    </ul>

  </aside><!-- End Sidebar-->


  

    <main id="main" class="main">
        @yield('content')
    </main>








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
          Designed by <a href="#">YuktiWebDeveloper</a>
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


      <!-- CSS multiple image -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{('/js/image-uploader.min.js')}}"></script>
      {{-- <script type="text/javascript" src="{{('/js/image-update-uploader.min.js')}}"></script> --}}

      <script>
        $('.input-images-1').imageUploader();
      </script>

      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

 
    
      <!-- Template Main JS File -->
      <script src="{{('/js/main.js')}}"></script>

      <!-- Show input multiple image -->
      <script>
        let fileInput = document.getElementById("file-input");
        let imageContainer = document.getElementById("images");
        let numOfFiles = document.getElementById("num-of-files");

        function preview(input) {
            imageContainer.innerHTML = "";
            numOfFiles.textContent = `${fileInput.files.length}
            Files Selected`;

            for(i of fileInput.files){

                let reader = new FileReader();
                let figure = document.createElement("figure");
                let figCap = document.createElement("figcaption");
                figCap.innerText = i.name;
                figure.appendChild(figCap);
                reader.onload=()=>{
                    let img = document.createElement("img");
                    img.setAttribute("src",reader.result);
                    figure.insertBefore(img,figCap);
                }

                imageContainer.appendChild(figure);
                reader.readAsDataURL(i);


            }

        }
      </script>


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
        function ganti() {
    
        // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
        var x = document.getElementById('pswrd').type;

        //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
        if (x == 'password') {

            //ubah form input password menjadi text
            document.getElementById('pswrd').type = 'text';
            
            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('btn').innerHTML = `<i class="bi bi-eye-slash-fill fs-5"></i>`;
        }
        else {

            //ubah form input password menjadi text
            document.getElementById('pswrd').type = 'password';

            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('btn').innerHTML = `<i class="bi bi-eye-fill fs-5"></i>`;
          }
        }
      </script>
      {{-- end show password  --}}

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


      <!-- JS show password2 -->
      <script>
        // membuat fungsi change
        function ubah() {
    
        // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
        var x = document.getElementById('password').type;

        //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
        if (x == 'password') {

            //ubah form input password menjadi text
            document.getElementById('password').type = 'text';
            
            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('button').innerHTML = `<i class="bi bi-eye-slash-fill fs-5"></i>`;
        }
        else {

            //ubah form input password menjadi text
            document.getElementById('password').type = 'password';

            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('button').innerHTML = `<i class="bi bi-eye-fill fs-5"></i>`;
          }
        }
      </script>
      {{-- end show password2  --}}


      <!-- JS show passowrd3 -->
      <script>
        // membuat fungsi change
        function rubah() {
    
        // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
        var x = document.getElementById('sandi').type;

        //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
        if (x == 'password') {

            //ubah form input password menjadi text
            document.getElementById('sandi').type = 'text';
            
            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('tombol').innerHTML = `<i class="bi bi-eye-slash-fill fs-5"></i>`;
        }
        else {

            //ubah form input password menjadi text
            document.getElementById('sandi').type = 'password';

            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('tombol').innerHTML = `<i class="bi bi-eye-fill fs-5"></i>`;
          }
        }
      </script>
      {{-- end show password3  --}}

    
    </body>
    
    </html>