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
    <link href="public/css/delivery.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="/public/font/themify-icons/themify-icons.css">

    <meta name="theme-color" content="#7952b3">
    <title>Delivery</title>

</head>

<body class="d-flex flex-column min-vh-100" style="height: 2000px;">
    <style>
        .delivery-content-left-button>button:hover a {
            background-color: black;
            color: #fff !important;
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
    <div class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
                <div class="delivery-top">
                    <div class="delivery-top-cart delivery-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="delivery-top-address delivery-top-item">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div class="delivery-top-payment delivery-top-item">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="delivery-content">
                <div class="delivery-content-left">
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="delivery-content-left-input-top">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ tên <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Tỉnh/TP <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Địa chỉ <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-button">
                        <a href=""><span>&#171;</span>
                            <p>Quay lại giỏ hàng</p>
                        </a>
                        <button>
                            <a href="?page=payment" class="text-decoration-none text-dark" style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</a>
                        </button>
                    </div>
                </div>
                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td>Tên sản phẩm</td>
                            <td>1</td>
                            <td>
                                <p>15.000.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="2">Tổng tiền hàng</td>
                            <td style="font-weight: bold;">
                                <p>15.000.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>