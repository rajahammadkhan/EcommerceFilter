@extends('frontend.layouts.master')
@section('content')
        <div class="intro-section bg-lighter pt-5 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                            <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside"
                                 data-toggle="owl" data-owl-options='{
                                        "nav": false,
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)"
                                                    srcset="{{asset('assets/images/slider/slide-1-480w.jpg')}}">
                                            <img src="{{asset('assets/images/slider/slide-1.jpg')}}" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">Topsale Collection</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">Living Room<br>Furniture</h1><!-- End .intro-title -->

                                        <a href="" class="btn btn-outline-white">
                                            <span>SHOP NOW</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)"
                                                    srcset="{{asset('assets/images/slider/slide-2-480w.jpg')}}">
                                            <img src="{{asset('assets/images/slider/slide-2.jpg')}}" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">News and Inspiration</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">New Arrivals</h1><!-- End .intro-title -->

                                        <a href="" class="btn btn-outline-white">
                                            <span>SHOP NOW</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)"
                                                    srcset="{{asset('assets/images/slider/slide-3-480w.jpg')}}">
                                            <img src="{{asset('assets/images/slider/slide-3.jpg')}}" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">Outdoor Furniture</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">Outdoor Dining <br>Furniture</h1><!-- End .intro-title -->

                                        <a href="" class="btn btn-outline-white">
                                            <span>SHOP NOW</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->

                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="row row-sm">
                                <div class="col-md-6 col-lg-12">
                                    <div class="banner banner-display">
                                        <a href="#">
                                            <img src="{{asset('assets/images/banners/home/intro/banner-1.jpg')}}"
                                                 alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite"><a href="#">Clearence</a></h4>
                                            <!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Chairs & Chaises <br>Up to 40%
                                                    off</a></h3><!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">Shop Now<i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 col-lg-12 -->

                                <div class="col-md-6 col-lg-12">
                                    <div class="banner banner-display mb-0">
                                        <a href="#">
                                            <img src="{{asset('assets/images/banners/home/intro/banner-2.jpg')}}"
                                                 alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite"><a href="#">New in</a></h4>
                                            <!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Best Lighting <br>Collection</a>
                                            </h3><!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">Discover Now<i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 col-lg-12 -->
                            </div><!-- End .row row-sm -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->

                <div class="mb-6"></div><!-- End .mb-6 -->

                <div class="owl-carousel owl-simple" data-toggle="owl"
                     data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
                    <a href="#" class="brand">
                        <img src="{{asset('assets/images/brands/1.png')}}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{asset('assets/images/brands/2.png')}}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{asset('assets/images/brands/3.png')}}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{asset('assets/images/brands/4.png')}}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{asset('assets/images/brands/5.png')}}" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="{{asset('assets/images/brands/6.png')}}" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .bg-lighter -->

        <div class="mb-5"></div><!-- End .mb-6 -->


        <div class="container">
            <div class="heading heading-center mb-6">
                <h2 class="title">Recent Arrivals</h2><!-- End .title -->

                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab"
                           aria-controls="top-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab"
                           aria-controls="top-fur-tab" aria-selected="false">Furniture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab"
                           aria-controls="top-decor-tab" aria-selected="false">Decor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab"
                           aria-controls="top-light-tab" aria-selected="false">Lighting</a>
                    </li>
                </ul>
            </div><!-- End .heading -->

            <div class="tab-content">
                <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-12-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-12-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Block Side Table/Trolley</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $229,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-10-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-10-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Carronade Suspension Lamp</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $892,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">NEW</span>
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-9-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-9-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Garden Armchair</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $94,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-8-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-8-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Madra Log Holder</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $104,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-11-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-11-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Original Outdoor Beanbag</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $259,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-13-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-13-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">2-Seater</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $3.107,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-14-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-14-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Wingback Chair</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $2.486,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #cc9999;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">NEW</span>
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-16-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-16-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="">Cushion Set 3 Pieces</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $199,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">NEW</span>
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-9-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-9-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Garden Armchair</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $94,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-12-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-12-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Block Side Table/Trolley</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $229,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-13-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-13-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">2-Seater</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $3.107,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-8-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-8-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Madra Log Holder</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $104,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-11-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-11-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Original Outdoor Beanbag</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $259,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-14-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-14-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Wingback Chair</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $2.486,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #cc9999;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-10-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-10-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="">Carronade Suspension Lamp</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $892,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">NEW</span>
                                        <a href="">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-16-1.jpg')}}"
                                                 alt="Product image" class="product-image">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-16-2.jpg')}}"
                                                 alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="">Cushion Set 3 Pieces</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $199,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
            <div class="more-container text-center">
                <a href="#" class="btn btn-outline-darker btn-more"><span>Load more products</span><i
                        class="icon-long-arrow-down"></i></a>
            </div><!-- End .more-container -->
        </div><!-- End .container -->

        <div class="container">
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rocket"></i>
                            </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                            <p>Free shipping for orders over $50</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                            <p>Alway online feedback 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->
            </div><!-- End .row -->

            <div class="mb-2"></div><!-- End .mb-2 -->
        </div><!-- End .container -->

        <div class="cta cta-display bg-image pt-4 pb-4"
             style="background-image: url(assets/images/backgrounds/cta/bg-6.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                            <div class="col">
                                <h3 class="cta-title text-white">Sign Up & Get 10% Off</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white">Molla presents the best in interior design</p>
                                <!-- End .cta-desc -->
                            </div><!-- End .col -->

                            <div class="col-auto">
                                <a href="{{url('register')}}" class="btn btn-outline-white"><span>SIGN UP</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .col-auto -->
                        </div><!-- End .row no-gutters -->
                    </div><!-- End .col-md-10 col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->
    </div>
@endsection
