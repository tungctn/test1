<?php 

// session_start();


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/826ab24e48.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Css -->
  <link href="public/css/cart.css" rel="stylesheet">
  <!-- Icons -->
  <!-- <link rel="stylesheet" href="public/font/themify-icons/themify-icons.css"> -->

  <meta name="theme-color" content="#7952b3">
  <title>Cart</title>

</head>

<body class="d-flex flex-column min-vh-100" style="height: 2000px;">
  <style>
    .cart-content-right-button button {
      padding: 0 18px;
      height: 35px;
      cursor: pointer;
    }

    .cart-content-right-button button:first-child {
      background-color: #fff;
      border: 1px solid black;
      margin-right: 20px;
    }

    .cart-content-right-button button:first-child:hover {
      background-color: #ddd;
    }

    .cart-content-right-button button:last-child {
      background-color: black;
      color: #fff;
      border: none;
      border: 1px solid black;
    }

    .cart-content-right-button button:last-child:hover a {
      background-color: #dddddd;
      color: black !important;
    }
  </style>
  <!-- Navigation -->
  <nav class="py-2 bg-light border-bottom navbar-fixed-top">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <img src="public/image/Cat.png" alt="mdo" width="32" height="32">
            <span class="fs-4">CellphoneZ</span>
          </a></li>
        <li class="nav-item"><a href="?page=home" class="nav-link link-dark px-2 active" aria-current="page">Trang chủ</a></li>
        <li class="nav-item"><a href="?page=cart" class="nav-link link-dark px-2">Giỏ hàng</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About us</a></li>
      </ul>
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

  <!-- Header search -->
  <header class="py-3 mb-4">
    <div class="container d-flex flex-wrap justify-content-center">
      <form class="col-12 col-lg-auto mb-3 mb-lg-0">
        <input type="search" class="form-control" placeholder="Tìm kiếm" aria-label="Search" style="width: 200%; transform: translate(-25%, 25%);">
      </form>
    </div>
  </header>
  <!-- End header search -->
  <div class="cart">
    <div class="container">
      <div class="cart-top-wrap">
        <div class="cart-top">
          <div class="cart-top-cart cart-top-item">
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
          <div class="cart-top-address cart-top-item">
            <i class="fa-solid fa-map-location-dot"></i>
          </div>
          <div class="cart-top-payment cart-top-item">
            <i class="fa-solid fa-wallet"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cart-content">
        <div class="cart-content-left">
          <table>
            <tr>
              <th>Sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>SL</th>
              <th>Thành tiền</th>
              <th>Xóa</th>
            </tr>
            <?php 
              global $list_product;
              // if ()
              for($i = 0; $i < 1; $i++) {
                # code...
                ?>

                <?php
              }
            ?>
            
          </table>
        </div>
        <div class="cart-content-right">
          <table>
            <tr>
              <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
            </tr>
            <tr>
              <td>TỔNG SẢN PHẨM</td>
              <td></td>
            </tr>
            <tr>
              <td>TỔNG TIỀN HÀNG</td>
              <td>
                <p><?php echo $_SESSION['price']; ?><sup>đ</sup></p>
              </td>
            </tr>
            <tr>
              <td>TẠM TÍNH</td>
              <td>
                <p style="color: black; font-weight: bold;"><?php echo $_SESSION['price']; ?><sup>đ</sup></p>
              </td>
            </tr>
          </table>
          <div class="cart-content-right-button">
            <!-- <a href=""></a> -->
            <button><a>TIẾP TỤC MUA</a></button>
            <button><a class="text-decoration-none text-white" href="?page=delivery">THANH TOÁN</a></button>

          </div>
        </div>
      </div>
    </div>
  </div>