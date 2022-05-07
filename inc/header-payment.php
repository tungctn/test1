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
    <link href="public/css/payment.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="public/font/themify-icons/themify-icons.css">

    <meta name="theme-color" content="#7952b3">
    <title>Payment</title>

</head>

<body class="d-flex flex-column min-vh-100">
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
    <div class="payment">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-cart payment-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="payment-top-address payment-top-item">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div class="payment-top-payment payment-top-item">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-delivery-item">
                            <input checked type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" id="method-payment1">
                            <label for="method-payment1">Thanh toán bằng thẻ tín dụng</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-image">
                            <img src="" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input checked name="method-payment" type="radio" id="method-payment2">
                            <label for="method-payment2">Thanh toán bằng thẻ ATM</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-image">
                            <img src="" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" id="method-payment3">
                            <label for="method-payment3">Thanh toán bằng ví điện tử MOMO</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-image">
                            <img src="" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" id="method-payment4">
                            <label for="method-payment4">Thanh toán bằng tiền mặt</label>
                        </div>
                        <div class="delivery-content-left-button">
                            <a href=""><span>&#171;</span>
                                <p>Quay lại giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="payment-content-right">
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá">
                        <button>Áp dụng</button>
                    </div>
                    <div class="payment-content-right-table">
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
                                <td style="font-weight: bold;" colspan="2">Giảm giá</td>
                                <td style="font-weight: bold;">
                                    <p>10%</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;" colspan="2">Tổng tiền hàng</td>
                                <td style="font-weight: bold;">
                                    <p>13.500.000 <sup>đ</sup></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="payment-content-right-payment">
                <button>TIẾP TỤC THANH TOÁN</button>
            </div>
        </div>
    </div>