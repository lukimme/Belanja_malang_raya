<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- Cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- My Css -->
    <link rel="stylesheet" href="../asset/detail_product.css">

    
</head>

<body>
    @include('layout/header')

    <br><br><br><br><br>

    {{-- Toko  Start --}}

    <section class="toko">
        <div class="tokoo">
        <div class="img-toko">
            <a href="#"><img src="../asset/img/lorem.png" alt=""></a>
        </div>
        <div class="name-toko">
            <a class="name" style="text-decoration: none" href="#">LOREM IPSUM</a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
        </div>
        <div class="toko_"></div>
    </div>
    </section>

    {{-- Toko End --}}

    {{-- All Product Toko Start--}}
    <section class="otoko">
       <div class="_toko">
            <li><a href="/otokoproduct">Produk</a></li>
            <li class="pipe">|</li>
            <li><a href="/otokocategories">Kategori</a></li>
       </div>
    </section>
    {{-- End All Product Toko End--}}

    {{-- Product Toko Start--}}

    {{-- Product Toko End --}}

    <br><br><br><br>

    @include('layout/footer')

    <!-- Cdn Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>