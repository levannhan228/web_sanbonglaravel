@extends('Layout.master')
@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/home-header-bg.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">List</a></span> <span>Stadium</span></p>
            <h1 class="mb-0 bread">Stadium</h1>
        </div>
        </div>
    </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category" id="product-category">
                        <li><a href="pagestadium" @if($active == 0) class="active" @endif>All</a></li>
                        <li><a href="nhantao" @if($active == 1) class="active" @endif >Sân cỏ nhân tạo</a></li>
                        <li><a href="tunhien" @if($active == 2) class="active" @endif>Sân cỏ tự nhiên</a></li>
                        <li><a href="cat" @if($active == 3) class="active" @endif>Sân cát</a></li>
                    </ul>
                    {{-- dùng kiểu if else url --}}
                    {{-- @if(Request::url() === 'your url here')
                    // code
                    @endif --}}
                </div>
            </div>
            <div class="row">
                @foreach ($stadium as $std)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                        <a href="detail/{{$std->id}}" class="img-prod"><img class="img-fluid" style="height:100%;width:100%" src="assets/images/{{$std->img}}" alt="Pro-Soccer">
                                {{-- <span class="status">30%</span> --}}
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="detail/{{$std->id}}">{{$std->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">700.000</span><span class="price-sale">{{$std->price}} đ/h</span></p>
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
          
            <div class="row mt-5">
        <div class="col text-center">
            <div class="phantrang">
            <ul>
                <li class="active">{{$stadium->links()}}</li>
            </ul>
            </div>
        </div>
        </div>
        </div>
    </section>
    <div class="fb-comments" data-href="http://pro_soccer.com/pagestadium" data-width="" data-numposts="5"></div>
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
        a.page-link, span.page-link{
        border-radius: 50% !important;
        margin-right: 0.5rem;
        color: black;
        width: 40px;
        height: 40px;
        line-height: 22px;
        border: 1px solid #e6e6e6 !important;
    }
    span.page-link.active{
        background-color: #82ae46 !important;
    }
    .phantrang{
        margin-left: 35%;
    }
    </style>

