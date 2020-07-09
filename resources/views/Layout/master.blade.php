<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pro Soccer</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{ asset('') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <script src="assets/js/jquery.min.js"></script>
</head>
<body class="goto-here">
	<div class="py-1 bg-primary">
            <div class="container">
                <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                    <div class="col-lg-12 d-block">
                        <div class="row d-flex">
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                <span class="text">+ 1235 2355 98</span>
                            </div>
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                <span class="text">levannhan228dhv@gmail.com</span>
                            </div>
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                                <span class="text">Sân bóng giá cả hợp lí &amp; Miễn phí xem</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="homepage">Pro Soccer</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="homepage" class="nav-link">Trang Chủ</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Giao Lưu</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                <li><a class="dropdown-item" href="shop.html">Tìm trận đấu</a></li>
                                <li><a class="dropdown-item" href="wishlist.html">Danh sách đội bóng</a></li>
                                <li><a class="dropdown-item" href="product-single.html">Tạo trận đấu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="pagestadium" class="nav-link">Đặt sân</a></li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Cửa hàng</a></li>
                        <li class="nav-item"><a href="news" class="nav-link">Tin tức</a></li>
                        <li class="nav-item"><a href="contactpage" class="nav-link">Liên hệ</a></li>
                        @if(Session::get('name')==true) <!--Kiểm tra xem đã có Session chưa-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{!!Session::get('name')!!}</a>
                            <!--Lấy tên tài khoản-->
                            <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                <li><a class="dropdown-item" href="shop.html">Thông tin tài khoản</a></li>
                                @if(Session::get('permissions')==1)
                                <li><a class="dropdown-item" href="admin">Trang Admin</a></li>
                                @elseif(Session::get('permissions')==2)
                                <li><a class="dropdown-item" href="user_master">Quản lý sân bóng</a></li>
                                @endif
                                <li><a class="dropdown-item" href="logout">Đăng xuất</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#darkModalForm">Đăng nhập</a></li>
                        @endif
                    </ul>
                </div>
            </div>
    </nav>
    {{-- END-NAV --}}

@yield('content')

<!-- Modal -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <!--Content-->
            <div class="modal-content card card-image">
                    <button type="button" class="close" style="text-align:right;margin:1rem;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                <div class="wrap-login100 p-l-110 p-r-110 p-b-33">
                        <form role="form" id="form-login" method="post" action="" class="login100-form validate-form flex-sb flex-w">
                            <span class="login100-form-title p-b-53">Sign in with</span>
                            
                            <button class="btn-face"><i class="fa fa-facebook-official"></i>Facebook</button>
                            <a href="#" class="btn-google"><img src="assets/images/icon-google.png" alt="GOOGLE">Google</a>
                            <div class="alert alert-danger" style="display:none"></div>
                            <div class="p-t-20 p-b-9">
                                <span class="txt1">Username</span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate = "Username is required">
                                <input class="input100" type="text" id="account" name="account" >
                                <span class="focus-input100"></span>
                            </div>
                            <div class="p-t-13 p-b-9">
                                <span class="txt1">Password</span>
                                <a href="#" class="txt2 bo1 m-l-5">Forgot?</a>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input class="input100" type="password" id="password" name="password" >
                                <span class="focus-input100"></span>
                            </div>
                            <div class="p-t-31 p-b-9">
                                    <input type="checkbox" class="checked">
                                    <span class="txt1">Remember me</span>
                                </div>
                            <div class="container-login100-form-btn p-b-30 p-t-30">
                                <button type="submit" id="dang_nhap"class="login100-form-btn">Sign In</button>
                            </div>
                            <div class="w-full text-center">
                                <span class="txt2">Not a member?</span>
                                <a href="loginpage" class="txt2 bo1">Sign up now</a>
                            </div>
                        </form>
                </div>
            </div>
            <!--/.Content-->
        </div>
</div>
    <!-- Modal -->

{{-- BEGIN FOOTTER --}}

        <footer class="ftco-footer ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Pro Soccer</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Shop</a></li>
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Journal</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                            <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQs</a></li>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </footer>

{{-- BEGIN FOOTTER --}}

{{-- LOADER --}}
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <script src="assets/js/post.js" type="text/javascript"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.animateNumber.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="assets/js/google-map.js"></script>
    <script src="assets/js/main.js"></script>
<!-- HTTPS required. HTTP will give a 403 forbidden response -->
<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=584343102370482&autoLogAppEvents=1"></script>
    </body>
</html>