<?php


// session_start();
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">

    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <a href="" id="logo">UNITOP</a>
            <div class="user_login">
                <p>Xin chao <strong><?php

                                    echo $_SESSION['user_login'];


                                    ?></strong><a href="?page=logout">Thoat</a></p>
            </div>
            <ul>
                <li><a href="?page=home">Trang chu</a></li>
                <li><a href="?page=about">Gioi thieu</a></li>
                <li><a href="?page=news">Tin tuc</a></li>
                <li><a href="?page=product">San pham</a></li>
                <li><a href="?page=contact">Lien he</a></li>
            </ul>
        </div> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Css -->
    <link href="public/css/home.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="public/font/themify-icons/themify-icons.css">

    <meta name="theme-color" content="#7952b3">
    <title>CellphoneZ</title>

</head>

<body class="d-flex flex-column min-vh-100" style="height: 2000px;">

    <!-- Navigation -->
    <nav class="py-2 bg-light border-bottom navbar-fixed-top">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item">
                    <a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                        <img src="public/image/Cat.png" alt="mdo" width="32" height="32">
                        <span class="fs-4">CellphoneZ</span></a>
                </li>
                <li class="nav-item"><a href="?page=home" class="nav-link link-dark px-2 active" aria-current="page">Trang chủ</a></li>
                <li class="nav-item"><a href="?page=cart" class="nav-link link-dark px-2">Giỏ hàng</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About us</a></li>
            </ul>
            <!-- Search -->
            <form class="d-flex">
                <input type="search" class="form-control" placeholder="Tìm kiếm" aria-label="Search">
            </form>
            <!-- End search -->
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- <img src="public/image/Cat.png" alt="mdo" width="48" height="48" class="rounded-circle"> -->
                    <span style="margin-left: 20px;"><?php

                                                        echo $_SESSION['user_login'];


                                                        ?></span>

                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                    <li><a class="dropdown-item" href="#">Thanh toán</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=logout">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End navigation -->

    <content>

        <!-- Slider -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item  active" data-interval="1000">


                    <div class="container">
                        <div class="carousel-caption">
                            <!-- <h1>Điện thoại 1</h1>
                            <p>Passage về điện thoại 1.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Mua ngay</a></p> -->
                            <img src="public/image/slider1.webp" class="img-fluid w-100" alt="">
                        </div>
                        <!-- End button card -->
                    </div>
                </div>

                <div class="carousel-item" data-interval="1000">
                    <div class="container">
                        <div class="carousel-caption">
                            <!-- <h1>Điện thoại 2.</h1>
                            <p>Passage về điện thoại 2.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Tìm hiểu thêm</a></p> -->
                            <img src="public/image/slider2.webp" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption" data-interval="1000">
                            <!-- <h1>Điện thoại 3</h1>
                            <p>Passage về điện thoại.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Xem bộ sưu tập</a></p> -->
                            <img src="public/image/slider3.webp" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- End slider -->


        <!-- Separator -->
        <header class="py-3 mb-4">
            <div class="d-flex flex-wrap justify-content-center" style="background-color: #0E0C68;">
                <a class="samsung" style="text-decoration: none; color: #66680c;font-size: 40px;">Samsung</a>
            </div>
        </header>

        <!-- Phone cards -->
        <div class="container mb-5 mt-5">
            <div class="row">
                <?php
                global $list_product;
                for ($i = 0; $i < 3; $i++) {
                    # code...
                ?>
                    <div class="col-md-4">
                        <div class="samsung card mt-3">
                            <div class="product-1 align-items-center p-2 text-center">
                                <img src="<?php
                                            echo $list_product[1]['thumb'];
                                            $_SESSION['thumb'] = $list_product[1]['thumb'];
                                            ?>" alt="mdo" class="rounded" width="160">

                                <h5><?php echo $list_product[1]['title'];
                                            $_SESSION['title'] = $list_product[1]['title']; ?></h5>

                                <!-- Card info -->
                                <div class="mt-3 info">
                                    <span class="heading d-block"> <?php echo $list_product[1]['product_desc']; ?> </span>
                                    <span class="explain">Samsung S22 utlra </span>
                                </div>
                                <div class="cost mt-3 text-dark">
                                    <span><?php echo $list_product[1]['price']."₫";
                                            $_SESSION['price'] = $list_product[1]['price']; ?></span>
                                    <!-- <p class="box-price-old">30.990.000</p> -->
                                </div>
                                <!-- End card info -->
                            </div>

                            <!-- Button Card  -->
                            <div class="p-3 phone text-center text-white mt-3 cursor">
                                <a class="card-btn btn btn-danger" href="?page=cart">Mua ngay</a>
                            </div>
                            <!-- End button card -->
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
        <!-- End phone cards -->

        <!-- Separator -->
        <header class="py-3 mb-4">
            <div class="d-flex flex-wrap justify-content-center" style="background-color: #680E0C;">
                <a class="iphone" style="text-decoration: none; color: 	#0c6668;font-size: 40px;">Iphone</a>
            </div>
        </header>

        <!-- Phone cards -->
        <div class="container mb-5 mt-5">
            <div class="row">
            <?php
                global $list_product;
                for ($i = 0; $i < 3; $i++) {
                    # code...
                ?>
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="product-1 align-items-center p-2 text-center">
                            <img src="<?php echo $list_product[0]['thumb']; ?>" alt="mdo" class="rounded" width="160">
                            <h5><?php echo $list_product[0]['title']; ?></h5>

                            <!-- Card info -->
                            <div class="mt-3 info">
                                <span class="heading d-block"> Ip13 pro </span>
                                <span class="explain">ip 13 pro </span>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <span><?php echo $list_product[0]['price']; ?><sup>đ</sup></span>
                            </div>
                            <!-- End card info -->
                        </div>

                        <!-- Button Card  -->
                        <div class="p-3 phone text-center text-white mt-3 cursor">
                            <a class="card-btn btn btn-danger" name="btn_buy" href="?page=cart">Mua ngay</a>
                        </div>
                        <!-- End button card -->
                    </div>
                </div>
                <!-- End Card 1 -->
                <?php
                }
                ?>

            </div>
        </div>
        <!-- End phone cards -->


    </content>