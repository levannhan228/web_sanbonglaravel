
@extends('Layout.master')
@section('content')

{{-- BEGIN-LOGIN --}}

<head>
    <link href="assets/css/style-login.css" rel='stylesheet' type='text/css' media="all">
</head>
<div class="main-login">
    <h1 class="welcome">Welcome to pro soccer</h1>
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="img-right-side">
                <h3>Tiện ích quản lý sân bóng &amp; đặt sân</h3>
                <p>Chúng tôi giúp là giải pháp giúp bạn giải quyết các vấn đề về sân thi đấu &amp; đối thủ xứng tầm <br>
                    hỗ trợ quảng bá và quản lý sân bóng một cách hiệu quả, tăng doanh thu sau khi hợp tác với chúng tôi</p>
            </div>
            <div class="txt-left-side">
                    <div class="alert alert-success" style="display: none;"></div>
                <h2> Sign Up Here </h2>
                <form  action="" method="post">
                        <p class="error errorLastName"></p>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" id="create_last_name" name="last_name" placeholder="Last Name">
                    </div>
                    <p class="error errorName"></p>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" id="create_name" name="name" placeholder="Name">
                        <div class="clear"></div>
                    </div>
                    <p  class="error errorAccount"></p>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="text" id="create_account" name="account" placeholder="Account">
                        <div class="clear"></div>
                    </div>
                    <p class="error errorPassword"></p>
                    <div class="form-left-to-w3l ">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" id="create_password" name="password" placeholder="Password">
                        <div class="btn btn-default" id="showpass"><i class="fa fa-eye"></i></div>
                        <div class="clear"></div>
                    </div>
                    <div class="btnn">
                        <button id="dang_ky" type="submit" class="signup">Sign Up </button>
                    </div>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

{{-- END-LOGIN --}}

@endsection
<style>
.ftco-footer{
    padding-top: 3rem !important;
}
.main-login{
    background-image: url('assets/images/ball-field-goal-big-114296.jpg');
    padding-bottom: 8rem !important;
}
.error {
    font-size: 12px;
    color: red;
    display:none;
}
</style>
