@extends('Layout.master')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/ball-field-game-46798.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                <a href="assets/images/{{$stadium->img}}" class="image-popup"><img src="assets/images/{{$stadium->img}}" class="img-fluid" alt="Pro-Soccer"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$stadium->name}}</h3>
                    <div class="rating d-flex">
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2">5.0</a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                            </p>
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                            </p>
                            <p class="text-left">
                                <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                            </p>
                        </div>
                    <p class="price"><span>{{$stadium->price}} đồng/h</span></p>
                    <p>{!!$stadium->about!!}</p>
                    <p>Địa chỉ : {!!$stadium->location!!}</p>
                    <p>Khung giờ:</p>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group d-flex">
                                        <input type="date" class="form-control col-md-4" style="margin-right:1rem;padding-left: 0rem;padding-right: 0.2rem">
                    <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="time_play" style="text-transform: none;" class="form-control">
                        <option value="07:00 - 08:30">07:00 - 08:30</option>
                        <option value="08:30 - 10:00">08:30 - 10:00</option>
                        <option value="10:00 - 11:30">10:00 - 11:30</option>
                        <option value="13:00 - 14:30">13:00 - 14:30</option>
                        <option value="14:30 - 16:00">14:30 - 16:00</option>
                        <option value="16:00 - 17:30">16:00 - 17:30</option>
                        <option value="17:30 - 19:00">17:30 - 19:00</option>
                        <option value="19:00 - 20:30">19:00 - 20:30</option>
                        <option value="20:30 - 22:00">20:30 - 22:00</option>
                        <option value="22:00 - 23:30">22:00 - 23:30</option>
                    </select>
                    </div>
                    </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="input-group col-md-6 d-flex mb-3">
                    {{-- <span class="input-group-btn mr-2">
                        <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                        <i class="ion-ios-remove"></i>
                        </button>
                        </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                    <span class="input-group-btn ml-2">
                        <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                        <i class="ion-ios-add"></i>
                    </button>
                    </span> --}}
                </div>
                <div class="w-100"></div>
            </div>
            <p><a href="bookyard/{{$stadium->id}}" class="btn btn-black py-3 px-5">Đặt sân</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Sân bóng</span>
            <h2 class="mb-4">Sân nổi bật</h2>
            <p>Sân bóng được nhiều người đặt</p>
        </div>
        </div>   		
        </div>
        <div class="container">
            <div class="row">
                @foreach ($stadiumrd as $std)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                        <a href="detail/{{$std->id}}" class="img-prod"><img class="img-fluid" style="height:100%;width:100%" src="assets/images/{{$std->img}}" alt="Pro_Soccer">
                                {{-- <span class="status">30%</span> --}}
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="detail/{{$std->id}}">{{$std->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">{{$std->price}} đ / h</span></p>
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
    </section>

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