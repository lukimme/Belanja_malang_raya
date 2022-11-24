<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content=" #ec8f04" />
  <title>Belanja Malang</title>

  <!-- Cdn Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- My Css -->
  <link rel="stylesheet" href="asset/style.css" />

  <!-- Box Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- pak lukman -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <!-- Glider Css -->
  <link rel="stylesheet" href="asset/glider-swiper/gliderr.css" />

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="asset/img/logobm.png" type="image/logobm">


</head>

<body>

  <!-- Scroll Top -->
  <a style="text-decoration: none; z-index: 9999999;" href="#home" class="scroll-top"><i class='bx bx-up-arrow-alt'></i></a>

  <div id="home"></div>

  <!-- Header -->
  @include('layout/header')

  <!-- banner -->

  <div class="container float justify-content-center" style="margin-top: 100px; margin-bottom: -30px;">
    <div class="row">
      <!-- banner -->
      <div class="col-9 bn-bg haha">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner benner-radius">
            <div class="carousel-item active">
              <img src="asset/img/belanjamalang.jpg" class="img-fluid d-block img1-ukuran" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="asset/img/1-4.jpg" class="img-fluid img1-ukuran" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="asset/img/3-3.jpg" class="img-fluid img1-ukuran" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- iklan masyarakat -->
      <div class="col ik-bg haha">
        <div id="carouselExampleControls" class="carousel slide carousel-fade text-center" data-bs-ride="carousel">
          <div class="carousel-inner">
            <h6 class="ikm">Iklan Masyarakat</h6>
            <div class="carousel-item active">
              <img src="asset/img/ULTAH.jpg" class="img-fluid d-block img2-ukuran" alt="..." />
            </div>
            <div class="carousel-item active">
              <img src="asset/img/mas-saprol.jpg" class="img-fluid img2-ukuran" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="asset/img/iklanhasta.jpg" class="img-fluid img2-ukuran" alt="..." />
            </div>
          </div>
        </div>
      </div>
      <!-- end iklan masyarakat -->
    </div>
  </div>
  <!-- end banner -->

  <!-- Categories Start -->
  <div class="container-sm mt-5 con_cart_dekstop con_cart_mobile" style="margin-bottom: -130px;">
    <div class="row justify-content-center pt-3 rounded ripai">
      <div class="col text-center wrapper">
        <a class="text-dark item" href="/fashioncategories">
          <img class="iconkat" src="asset/img/fashion.png" alt="">
          <p class="fontkat mt-2">Fashion</p>
        </a>
        <a class="text-dark item" href="/productdigital">
          <img class="iconkat" src="asset/img/produkdigital.png" alt="">
          <p class="fontkat mt-2">Gadget</p>
        </a>
        </a>
        <a class="text-dark item" href="/aksesoris">
          <img class="iconkat" src="asset/img/aksesoris.png" alt="">
          <p class="fontkat mt-2">Aksesoris</p>
        </a>
        <a class="text-dark item" href="/ibuanak">
          <img class="iconkat" src="asset/img/ibu_anak.png" alt="">
          <p class="fontkat mt-2">Ibu & Anak</p>
        </a>
        <a class="text-dark item" href="/olahraga">
          <img class="iconkat" src="asset/img/olahraga.png" alt="">
          <p class="fontkat mt-2">Olahraga</p>
        </a>
        <a class="text-dark item" href="/kuliner">
          <img class="iconkat" src="asset/img/kuliner.png" alt="">
          <p class="fontkat mt-2">Kuliner</p>
        </a>
        <a class="text-dark item" href="/categories">
          <img class="iconkat" src="asset/img/belanjamalang.png" alt="">
          <p class="fontkat mt-2">Belanja Malang</p>
        </a>
      </div>
    </div>
  </div>
  <!-- Categories End -->


  <!-- Product Terbaru Start -->
  <section class="products" style="margin-top: 80px;">
    <!-- Heading -->
    <div class="heading">
      <h1>Pilihan Produk <br />
        <span>Terbaru</span>
      </h1>
      <a href="/produkterlaris" class="btn">Lihat Semua <i class="bx bx-right-arrow-alt"></i></a>
    </div>

    <!-- Glider Swiper -->
    <div class="glider-contain">
      <div class="glider0">
            <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
             <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <a style="text-decoration: none" href="/detailproduct"><span class="p-price">$100</span></a>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
             <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
           <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>
      </div>
        <!-- Slider Btns -->
        <div class="slider-btns2">
          <button aria-label="Previous" class="glider-prev0">«</button>
          <button aria-label="Next" class="glider-next0">»</button>
        </div>
        <!-- End Slider Btns -->
      </div>
  </section>
  <!-- End Product Terlaris  -->


  <!-- Product diskon Start -->
  <section class="products" style="margin-top: -160px;">
    <!-- Heading -->
    <div class="heading">
      <h1>Pilihan Produk <br />
        <span>Diskonan</span>
      </h1>
      <a href="/produkdiskon" class="btn">Lihat Semua <i class="bx bx-right-arrow-alt"></i></a>
    </div>


    <!-- Glider Swiper -->
    <div class="glider-contain">
      <div class="glider">
        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="#" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="d"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- Slider Btns -->
      <div class="slider-btns">
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
      </div>
      <!-- End Slider Btns -->
    </div>
  </section>

  <!-- End Product Diskon  -->

  <!-- Product Terlaris Start -->
  <section class="products" style="margin-top: -160px;">
    <!-- Heading -->
    <div class="heading">
      <h1>Pilihan Produk <br />
        <span>Terlaris</span>
      </h1>
      <a href="/produkterlaris" class="btn">Lihat Semua <i class="bx bx-right-arrow-alt"></i></a>
    </div>


    <!-- Glider Swiper -->
    <div class="glider-contain">
      <div class="glider2">
        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="#" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="d"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product-box">
          <!-- Discount -->
          <span class="p-discount">-20%</span>
          <!-- Img Container -->
          <div class="p-img-container">
            <div class="p-img">
              <a href="/detailproduct">
                <img src="asset/img/bag.jpg" class="p-img-front" alt="Front" /></a>
            </div>
          </div>

          <!-- Text -->
          <div class="p-box-text">
            <!-- Category -->
            <div class="product-category">
              <span>Kategori</span>
            </div>
            <!-- Title -->
            <a href="/detailproduct" class="product-title"> Nama Produk </a>
            <!-- Price Buy -->
            <div class="price-buy">
              <span class="p-price">$100</span>
              <a href="/detailproduct"><i class="bx bx-cart-alt"></i> </a>
              <i class="bx bx-heart"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- Slider Btns -->
      <div class="slider-btns">
        <button aria-label="Previous" class="glider-prev2">«</button>
        <button aria-label="Next" class="glider-next2">»</button>
      </div>
      <!-- End Slider Btns -->
    </div>
  </section>
  <!-- End Product Terlaris  -->

  <!-- Fashion Start -->
  <div class="fashion">
    <header class="headerr">
      <div class="hero">
        <h2 class="headingg">Fashion Product</h2>
        <p class="sub-heading">Yuk tampil bergaya dengan <br>berbelanja di belanjamalang</p>
        <a style="text-decoration: none;" href="/showallfashion" class="btn-box">Lihat Semua <i class="bx bx-right-arrow-alt"></i></a>
      </div>
      <!-- Prouct Fashion -->
      <section class="productt">
        <button class="pre-btn">«</button>
        <button class="nxt-btn">» </button>
        <div class="product-container">
          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/hiphopman.jpeg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/womanorange.jpg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/hiphopman.jpeg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/womanorange.jpg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/hiphopman.jpeg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/womanorange.jpg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/hiphopman.jpeg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <a href="/detailproduct"><img src="asset/img/womanorange.jpg" class="product-thumb" alt=""></a>
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <a style="text-decoration: none;" href="/detailproduct">
                  <h3>Nama Produk</h3>
                </a>
                <span>$150</span>
              </div>
              <a href="/detailproduct"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>
        </div>
      </section>
    </header>
  </div>
  <!-- Fashion End -->

  <!-- Kuliner Start -->
  <div class="kuliner">
    <header class="headerr2">
      <div class="hero2">
        <h2 class="headingg">Kuliner Lezat</h2>
        <p class="sub-heading">Makanan dan cemilan lezat <br> bisa dibeli di belanjamalang</p>
        <a style="text-decoration: none;" href="/showallkuliner" class="btn-box2"><i class="bx bx-right-arrow-alt"></i> Lihat Semua</a>
      </div>
      <!-- Prouct Fashion -->
      <section class="productt2">
        <button class="pre-btn2">«</button>
        <button class="nxt-btn2">» </button>
        <div class="product-container2">
          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/sushi.jpeg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/ramen.jpg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class='bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/sushi.jpeg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/ramen.jpg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/sushi.jpeg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/ramen.jpg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/sushi.jpeg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/ramen.jpg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>

          <!-- Product Card -->
          <div class="product-card">
            <div class="product-image">
              <img src="asset/img/sushi.jpeg" class="product-thumb" alt="">
            </div>
            <!-- Text -->
            <div class="box-text">
              <div class="title-price">
                <h3>Nama Produk</h3>
                <span>$150</span>
              </div>
              <a href="#"><i class=' bx bx-cart-alt'></i></a>
            </div>
          </div>
        </div>
      </section>
    </header>
  </div>
  <!-- Kuliner End -->

  <!-- Brand Start -->
  <section class="brand">
    <h1>Brand Product</h1>
    <div class="ma-bg">
      <div class="marquee">
        <img src="asset/img/1.png" alt="">
        <img src="asset/img/2.png" alt="">
        <img src="asset/img/3.png" alt="">
        <img src="asset/img/4.png" alt="">
        <img src="asset/img/5.png" alt="">
        <img src="asset/img/6.png" alt="">

      </div>
    </div>
  </section>
  <!-- Brand End -->

  <!-- Footer -->
  @include('layout/footer')

  <!-- Glider Js   -->
  <script src="asset/glider-swiper/glider.js"></script>

  <!-- main js -->
  <script src="asset/mainn.js"></script>

  <!-- Script Glider Start -->
  <script>
    new Glider(document.querySelector(".glider"), {
      slidesToScroll: 5,
      slidesToShow: 5,
      draggable: true,
      dots: ".dots",
      arrows: {
        prev: ".glider-prev",
        next: ".glider-next",
      },
    });
  </script>

  <script>
    new Glider(document.querySelector(".glider2"), {
      slidesToScroll: 5,
      slidesToShow: 5,
      draggable: true,
      dots: ".dots",
      arrows: {
        prev: ".glider-prev2",
        next: ".glider-next2",
      },
    });
  </script>

  <script>
    new Glider(document.querySelector(".glider0"), {
      slidesToScroll: 5,
      slidesToShow: 5,
      draggable: true,
      dots: ".dots",
      arrows: {
        prev: ".glider-prev0",
        next: ".glider-next0",
      },
    });
  </script>
  <!-- End Script Glider -->


  <!-- Cdn Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>