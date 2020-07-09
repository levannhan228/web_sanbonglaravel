@extends('Layout.master')
@section('content')

{{-- BANNER --}}

<div id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(assets/images/slide-1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">Đặt sân nhanh chóng &amp; Giao lưu rèn luyện</h1>
                        <h2 class="subheading mb-4">Nhanh chóng &amp; tiện lợi</h2>
                        <p><a href="#" class="btn btn-primary">Xem chi tiết</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image: url(assets/images/slide-2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">Hủy sân Free &amp; hoàn tiền vào thời tiết xấu</h1>
                        <h2 class="subheading mb-4">Là người bạn đồng hành đán tin cậy</h2>
                        <p><a href="#" class="btn btn-primary">Xem chi tiết</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- END-BANNER --}}

<div class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">giao lưu</h3>
                        <span>Nhanh chóng &amp; tiện lợi</span>
                    </div>
                </div>      
            </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                    <i class="fa fa-futbol-o"></i>
                </div>
                <div class="media-body">
                    <h3 class="heading">đặt sân</h3>
                    <span>Dễ dàng &amp; phù hợp</span>
                </div>
            </div>    
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <div class="media-body">
                    <h3 class="heading">quảng bá</h3>
                    <span>quảng bá hiệu quả</span>
                </div>
            </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="media-body">
                    <h3 class="heading">Hỗ trợ</h3>
                    <span>Hỗ trợ 24/7</span>
                </div>
            </div>      
        </div>
        </div>
    </div>
</div>

{{-- CATEGORY--}}

<div class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(assets/images/action-action-energy-active-3006119.jpg);">
                            <div class="text text-center">
                                <h2>Đặt Sân</h2>
                                <p>Bạn muốn trận bóng vui vẻ cùng bạn bè ? nhưng chưa có sân ? đừng để điều đó ảnh hưởng tới niềm vui của bạn!</p>
                                <p><a href="pagestadium" class="btn btn-primary">Đặt sân ngay</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/action-activity-balls-296302.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Trẻ em</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/athletes-ball-daytime-685382.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Người lớn</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/ball-field-goal-114296.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Sân cỏ tự nhiên</a></h2>
                    </div>		
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/bleachers-daylight-daytime-2413089.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Sân cỏ nhân tạo</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- END-CATEGORY --}}

{{-- PITCH-HOT --}}

<div class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Sản bóng nổi bật</span>
                <h2 class="mb-4">Sân bóng của chúng tôi</h2>
                <p>Trang thông tin sân bóng riêng biệt với hàng ngàn người truy cập hằng ngày!</p>
            </div>
        </div>   		
    </div>
    <div class="container">
            <div class="row">
                @foreach ($stadium as $std)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                        <a href="detail/{{$std->id}}" class="img-prod"><img class="img-fluid" style="height:100%;width:100%" src="assets/images/{{$std->img}}" alt="Pro-Soccer">
                                <span class="status">hot</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="detail/{{$std->id}}">{{$std->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">{{$std->price}}/h</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="detail/{{$std->id}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>

{{-- END-PITCH-HOT --}}

{{-- MESSAGE --}}

<div class="ftco-section img" style="background-image: url(assets/images/slide1-1.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading" style="color: white">Giá tốt nhất cho bạn</span>
                <h2 class="mb-4" style="color: white">Giao dịch trong ngày</h2>
                <p style="color: black">Địa điểm, giá sân, giờ mở cửa,... các sân bóng trong khu vực gần nơi bạn ở. Lựa chọn sân gần vị trí của bạn nhất, đặt sân online, tiện lợi, dễ dàng</p>
                <h3><a href="#" style="color: black">Pitch</a></h3>
                <span class="price">$10 <a href="#" style="color: black">now $5 only</a></span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>   		
    </div>
</div>

{{-- END-MESSAGE --}}

<div class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Lời nhận xét</span>
            <h2 class="mb-4">Khách hàng hài nhận xét về chúng tôi</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(assets/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Doanh thu tăng từ 10% trở lên! Cắt giảm chi phí, thời gian quản lý, quảng bá được sân bóng đến mọi người, sân luôn hoạt động</p>
                                <p class="name">Lý Bạch</p>
                                <span class="position">Chủ sân bóng</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(assets/images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Chúng có thể dễ dàng bắt cặp với những đội bóng phù hợp và rèn luyện sức khỏe cũng như kết thêm bạn mới.</p>
                                <p class="name">CLB liverpool</p>
                                <span class="position">Đội bóng</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(assets/images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Dễ dàng tìm trận và thuê sân, giá cả hợp lý và nó thực sự rất tiện ích, xóa nỗi lo không có sân đá, điều đó thật tuyệt vời.</p>
                                <p class="name">Đường Tam</p>
                                <span class="position">Khách hàng</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(assets/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(assets/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">System Analyst</span>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Theo dõi thông tin của chúng tôi</h2>
                <span>Đăng ký thông tin, cập nhật e-mail về các sân bóng mới nhất của chúng tôi để được ưu đãi đặc biệt</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Nhập địa chỉ email">
                <input type="submit" value="Đăng ký" class="submit px-3">
                </div>
            </form>
            </div>
        </div>
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
<style>
.btn-primary{
    background: #231c1ccc !important;
    width: 9rem;
    height: 3rem;
    line-height: 2rem !important;
}
.img-fluid{
    height:13rem !important; 
    width: 100%;
}
.item{
    height: 357px;
}
</style>