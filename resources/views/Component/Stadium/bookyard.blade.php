@extends('Layout.master')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/action-ball-field-274506.jpg');">
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
            </div>
        </div>
        </div>
    </div>

    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
            <form action="" class="billing-form">
                <h3 class="mb-4 billing-heading">Chi tiết thanh toán</h3>
                <div class="row align-items-end">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Họ</label>
                        <p  class="error errorLastname"></p>
                    <input type="text" class="form-control" id="deal_last_name" value="{!!Session::get('last_name')!!}" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tên</label>
                        <p  class="error errorName"></p>
                    <input type="text" value="{!!Session::get('name')!!}" id="deal_name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                        <div class="form-group">
                        <label for="streetaddress">Tỉnh / Thành phố</label>
                        <p  class="error errorProvince"></p>
                    <input type="text" id="deal_province_city" class="form-control" placeholder="">
                    </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="streetaddress">Địa chỉ</label>
                        <p  class="error errorAddress"></p>
                    <input type="text" id="deal_address" class="form-control" placeholder="Số nhà và tên đường">
                    </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Điện thoại</label>
                        <p  class="error errorPhone"></p>
                    <input type="text" class="form-control" id="deal_phone" value="{!!Session::get('phone')!!}"  placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emailaddress">Địa chỉ email</label>
                        <p  class="error errorEmail"></p>
                    <input type="text" class="form-control" id="deal_email" value="{!!Session::get('email')!!}"  placeholder="">
                    </div>
                </div>
                <div class="w-100"></div>
                </div>
                <input id="id_stadium" value="{{$stadium->id}}" style="display:none">
          
            <!-- END -->
                    </div>
                    <div class="col-xl-5">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 d-flex mb-5">
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Đơn hàng</h3>
                        <p class="d-flex">
                            <span>Tên sân</span>
                        <span>{{$stadium->name}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Tổng tiền</span>
                        <span>{{$stadium->price}} đ / h</span>
                        </p>
                        <p class="d-flex">
                            <span>Giảm giá</span>
                            <span>0</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>TỔNG CỘNG</span>
                            <span>{{$stadium->price}} đ / h</span>
                            <input type="text" value="{{$stadium->price}}" id="price" style="display:none">
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="cart-detail p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" class="mr-2"> Chuyển khoản ngân hàng trực tiếp</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" class="mr-2"> Kiểm tra thanh toán</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="" class="mr-2"> Tôi đã đọc và chấp nhận các điều khoản và điều kiện</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p><button id="dathang" class="btn btn-primary py-3 px-4" >Đặt hàng</button></p>
                                </div>
                </div>
            </form>
            </div>
        </div> <!-- .col-md-8 -->
        </div>
    </div>
    </section> <!-- .section -->

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                </div>
                </form>
            </div>
            </div>
        </div>
    </section>
@endsection
<style>
    .error {
    font-size: 12px;
    color: red;
    display:none;
}
</style>