<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../asset/cart.css" />

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Glider Css -->
    <link rel="stylesheet" href="../asset/glider-swiper/glider.css">

    <!-- Glider JS -->
    <link rel="stylesheet" href="../asset/glider-swiper/glider.js" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="../asset/img/logobm.png" type="image/logobm">

</head>

<body>

    @include('/layout/header')
    <br><br><br><br><br>
    <!-- Keranjang -->
    <div class="container-sm con_cart_dekstop con_cart_mobile">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h6 class="name_keranjang">Keranjang</h6>

                        <div class="selectall_hapus">
                            <div class="row">
                                <div class="col">
                                    <input type="checkbox" class="form-check-input form_selectall">
                                    <label class="form-check-label d-inline selectall">Select All</label>
                                </div>
                                <div class="col text-end">
                                    <a class="del_item d-inline" href="#"> Hapus </a>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="address_item">
                            <div class="row">
                                <div class="col-6">
                                    <input type="checkbox" class="form-check-input form_select_item">
                                    <label class="form-check-label shop_name">Nama Toko</label>
                                    <p class="text-muted address">Kab.Malang</p>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="icon_trash" href="#"> <i class='bx bxs-trash-alt'></i> </a>
                                </div>
                            </div>


                        </div>

                        <div class="item">

                            <img class="item_img" src="../asset/img/salad1.png" alt="">
                            <span class="diskon">20%</span>
                            <span class="price_original text-muted">Rp50.000</span>
                            <span class="price_diskon">Rp20.000</span>

                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p class="item_name">Salad Sehat Menyegarkan</p>
                                </div>
                                <div class="col-6">
                                    <!-- Button Minus&Plus -->
                                    <div class="border border-2 text-center quantity buttons_added">
                                        <input type="button" value="-" class="minus" />
                                        <input type="number" step="1" min="1" max="30" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" />
                                        <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="address_item">
                            <div class="row">
                                <div class="col-6">
                                    <input type="checkbox" class="form-check-input form_select_item">
                                    <label class="form-check-label shop_name">Nama Toko</label>
                                    <p class="text-muted address">Kab.Malang</p>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="icon_trash" href="#"> <i class='bx bxs-trash-alt'></i> </a>
                                </div>
                            </div>


                        </div>

                        <div class="item">

                            <img class="item_img" src="../asset/img/salad1.png" alt="">
                            <span class="diskon">20%</span>
                            <span class="price_original text-muted">Rp50.000</span>
                            <span class="price_diskon">Rp20.000</span>

                            <div class="row align-items-end">
                                <div class="col-6">
                                    <p class="item_name">Salad Sehat Menyegarkan</p>
                                </div>
                                <div class="col-6">
                                    <!-- Button Minus&Plus -->
                                    <div class="border border-2 text-center quantity buttons_added">
                                        <input type="button" value="-" class="minus" />
                                        <input type="number" step="1" min="1" max="30" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" />
                                        <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rekomendasi -->
    <!-- Start Halaman Semua Produk Fashion -->
    <section class="products mb-5">
        <div class="heading">
            <h1 class="fs-5">Rekomendasi <span>Untukmu</span></h1>
            <!-- <a href="#">See All</a> -->
        </div>
        <!-- Fashion Content -->
        <div class="products-content">
            <!-- Box 1 -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount">-20%</span>
                <!-- Img Container -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="#">
                            <img src="../asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
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
                        <a href="#"><i class="bx bx-cart-alt"></i> </a>
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
            </div>

            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount">-20%</span>
                <!-- Img Container -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="#">
                            <img src="../asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
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
                        <a href="#"><i class="bx bx-cart-alt"></i> </a>
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
            </div>

            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount">-20%</span>
                <!-- Img Container -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="#">
                            <img src="../asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
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
                        <a href="#"><i class="bx bx-cart-alt"></i> </a>
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
            </div>

            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount">-20%</span>
                <!-- Img Container -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="#">
                            <img src="../asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
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
                        <a href="#"><i class="bx bx-cart-alt"></i> </a>
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
            </div>

            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount">-20%</span>
                <!-- Img Container -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="#">
                            <img src="../asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
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
                        <a href="#"><i class="bx bx-cart-alt"></i> </a>
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
            </div>

            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount">-20%</span>
                <!-- Img Container -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="#">
                            <img src="../asset/img/headphonee.jpg" class="p-img-front" alt="Front" /></a>
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
                        <a href="#"><i class="bx bx-cart-alt"></i> </a>
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Halaman Semua Produk Fashion -->



    <!-- Total Belanja -->
    <div class="container-sm fixed-bottom con_total_mobile">
        <div class="card card_total">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6 text-center mt-2">

                        <h5 class="title">Total harga <select class="border border-0 bg-light text-center" data-bs-toggle="modal" data-bs-target="#exampleModal"></select></h5>
                        <p class="total_price">Rp00.000</p>
                    </div>
                    <div class="col-6 text-center">
                        <a href="#" class="button_buy">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- PopUp Total Pembelian -->
    <div class="modal mt-5" tabindex="-1" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Total Pembelian Kamu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row row_total">

                        <!-- Title total -->
                        <div class="col-6 text-start text-muted total_item">
                            <p>Total Harga(2Item):</p>
                            <p>Total Diskon:</p>
                        </div>

                        <!-- Price -->
                        <div class="col-6 text-end total_price">
                            <p>Rp00.000</p>
                            <p>-Rp00.000</p>
                        </div>

                    </div>

                    <hr>

                    <div class="row row_total">

                        <!-- Title total -->
                        <div class="col-6 text-start text-muted total_item">
                            <p>Total Semua:</p>
                        </div>

                        <!-- Price -->
                        <div class="col-6 text-end total_price">
                            <p>Rp00.000</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Customer Cart -->


    @include('/layout/footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>