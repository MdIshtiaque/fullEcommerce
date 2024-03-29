@extends('welcome')
@push('css')
    <style>
        .product-default-single-item .image-box img,
        .product-list-single .product-list-img-link img {
            width: 100%; /* or specific fixed width */
            height: 300px; /* or specific fixed height */
            object-fit: scale-down;
        }

        .product-list-single .product-list-img-link img {
            width: 250px; /* or a specific fixed width */
            height: 300px; /* or a specific fixed height */
            object-fit: cover;
        }

        .banner-single-item .image img {
            width: 100%; /* adjust width as needed */
            height: 500px; /* adjust height as needed */
            object-fit: scale-down;
            object-position: center;
        }
        .hero-slider-bg img {
            width: 100%; /* Make the image fill the width of its container */
            height: 700px; /* Set a fixed height for the image */
            object-fit: cover; /* Cover the container without losing the aspect ratio */
        }


    </style>
@endpush
@section('content')
    <!-- Start Hero Slider Section-->
    <div class="hero-slider-section" style="height: 700px !important;">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                @foreach($sliders as $slider)
                    <div class="hero-single-slider-item swiper-slide">
                        <!-- Hero Slider Image -->
                        <div class="hero-slider-bg">
                            <img
                                src="{{ asset('admin/slider/'. $slider->image) ? asset('admin/slider/'. $slider->image) : asset('assets/images/hero-slider/slider 1.png') }}"
                                alt="">
                        </div>
                        <!-- Hero Slider Content -->
                        <div class="hero-slider-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="hero-slider-content color">
{{--                                            <h4 style="color: white" class="subtitle">New collection</h4>--}}
{{--                                            <h1 style="color: white" class="title">New Series of <br> Panjabi </h1>--}}
                                            <a href="product-details-default.html" class="btn btn-lg btn-pink">shop
                                                now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination active-color-pink"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev d-none d-lg-block"></div>
            <div class="swiper-button-next d-none d-lg-block"></div>
        </div>
    </div>
    <!-- End Hero Slider Section-->

    <!-- Start Service Section -->
    {{--    <div class="service-promo-section section-top-gap-100">--}}
    {{--        <div class="service-wrapper">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <!-- Start Service Promo Single Item -->--}}
    {{--                    <div class="col-lg-3 col-sm-6 col-12">--}}
    {{--                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">--}}
    {{--                            <div class="image">--}}
    {{--                                <img src="assets/images/icons/service-promo-5.png" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="content">--}}
    {{--                                <h6 class="title">FREE SHIPPING</h6>--}}
    {{--                                <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- End Service Promo Single Item -->--}}
    {{--                    <!-- Start Service Promo Single Item -->--}}
    {{--                    <div class="col-lg-3 col-sm-6 col-12">--}}
    {{--                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">--}}
    {{--                            <div class="image">--}}
    {{--                                <img src="assets/images/icons/service-promo-6.png" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="content">--}}
    {{--                                <h6 class="title">30 DAYS MONEY BACK</h6>--}}
    {{--                                <p>100% satisfaction guaranteed, or get your money back within 30 days!</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- End Service Promo Single Item -->--}}
    {{--                    <!-- Start Service Promo Single Item -->--}}
    {{--                    <div class="col-lg-3 col-sm-6 col-12">--}}
    {{--                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">--}}
    {{--                            <div class="image">--}}
    {{--                                <img src="assets/images/icons/service-promo-7.png" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="content">--}}
    {{--                                <h6 class="title">SAFE PAYMENT</h6>--}}
    {{--                                <p>Pay with the world’s most popular and secure payment methods.</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- End Service Promo Single Item -->--}}
    {{--                    <!-- Start Service Promo Single Item -->--}}
    {{--                    <div class="col-lg-3 col-sm-6 col-12">--}}
    {{--                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">--}}
    {{--                            <div class="image">--}}
    {{--                                <img src="assets/images/icons/service-promo-8.png" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="content">--}}
    {{--                                <h6 class="title">LOYALTY CUSTOMER</h6>--}}
    {{--                                <p>Card for the other 30% of their purchases at a rate of 1% cash back.</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- End Service Promo Single Item -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- End Service Section -->

    <!-- Start Banner Section -->
    {{--    <div class="banner-section section-top-gap-100">--}}
    {{--        <div class="banner-wrapper clearfix">--}}
    {{--            <!-- Start Banner Single Item -->--}}
    {{--            <a href="product-details-default.html">--}}
    {{--                <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left"--}}
    {{--                     data-aos="fade-up" data-aos-delay="0">--}}
    {{--                    <div class="image">--}}
    {{--                        <img class="img-fluid" src="assets/images/banner/banner-style-7-img-1.jpg" alt="">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--            <!-- End Banner Single Item -->--}}
    {{--            <!-- Start Banner Single Item -->--}}
    {{--            <a href="product-details-default.html">--}}
    {{--                <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left"--}}
    {{--                     data-aos="fade-up" data-aos-delay="200">--}}
    {{--                    <div class="image">--}}
    {{--                        <img class="img-fluid" src="assets/images/banner/banner-style-7-img-2.jpg" alt="">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--            <!-- End Banner Single Item -->--}}
    {{--            <!-- Start Banner Single Item -->--}}
    {{--            <a href="product-details-default.html">--}}
    {{--                <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left"--}}
    {{--                     data-aos="fade-up" data-aos-delay="400">--}}
    {{--                    <div class="image">--}}
    {{--                        <img class="img-fluid" src="assets/images/banner/banner-style-7-img-3.jpg" alt="">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--            <!-- End Banner Single Item -->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">the New arrivals</h3>
                                <p>Preorder now to receive exclusive deals & gifts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    @foreach($products as $product)
                                        <div class="product-default-single-item product-color--pink swiper-slide">
                                            <div class="image-box">
                                                <a href="{{ route('product.details', ['product' => $product->id]) }}"
                                                   class="image-link">
                                                    <img
                                                        src="{{ asset('admin/product/'. $product->productImage->first()->image) }}"
                                                        alt="">
                                                    <img
                                                        src="{{ asset('admin/product/'. optional($product->productImage->skip(1)->first())->image) }}"
                                                        alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                           class="add-to-cart-btn"
                                                           data-product-id="{{ $product->id }}"
                                                           data-product-price="{{ isset($product->discount_price) ? $product->discount_price :$product->price }}"
                                                           data-bs-target="#modalAddcart-{{ $product->id }}">Add
                                                            to
                                                            Cart</a>
                                                    </div>
                                                    <div class="action-link-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a
                                                            href="{{ route('product.details', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                                    </h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    @if(isset($product->discount_price))
                                                        <del class="price">{{ $product->price }}</del>
                                                        <span class="price">{{ $product->discount_price }}</span>
                                                    @else
                                                        <span class="price">{{ $product->price }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="banner-wrapper clearfix">
            <!-- Start Banner Single Item -->
            <a href="product-details-default.html">
                <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left"
                     data-aos="fade-up" data-aos-delay="0">
                    <div class="image">
                        <img class="img-fluid"
                             src="{{ isset($banners[0]) ? asset('admin/Banner/'. $banners[0]->image) : asset('assets/images/banner/banner-style-8-img-1.jpg') }}"
                             alt="">
                    </div>
                </div>
            </a>
            <!-- End Banner Single Item -->
            <!-- Start Banner Single Item -->
            <a href="product-details-default.html">
                <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left"
                     data-aos="fade-up" data-aos-delay="200">
                    <div class="image">
                        <img class="img-fluid"
                             src="{{ isset($banners[1]) ? asset('admin/Banner/'. $banners[1]->image) : asset('assets/images/banner/banner-style-8-img-2.jpg') }}"
                             alt="">
                    </div>
                </div>
            </a>
            <!-- End Banner Single Item -->
        </div>
    </div>

    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">BEST SELLERS</h3>
                                <p>Add our best sellers to your weekly lineup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    @foreach($products as $product)
                                        <div class="product-default-single-item product-color--pink swiper-slide">
                                            <div class="image-box">
                                                <a href="{{ route('product.details', ['product' => $product->id]) }}"
                                                   class="image-link">
                                                    <img
                                                        src="{{ asset('admin/product/'. $product->productImage->first()->image) }}"
                                                        alt="">
                                                    <img
                                                        src="{{ asset('admin/product/'. optional($product->productImage->skip(1)->first())->image) }}"
                                                        alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                           class="add-to-cart-btn"
                                                           data-product-id="{{ $product->id }}"
                                                           data-product-price="{{ isset($product->discount_price) ? $product->discount_price :$product->price }}"
                                                           data-bs-target="#modalAddcart-{{ $product->id }}">Add
                                                            to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a
                                                            href="{{ route('product.details', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                                    </h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">{{ $product->price }}</span>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->




    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid"
                                                 src="assets/images/product/default/home-3/default-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart
                                            successfully!
                                        </div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE
                                            SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area mb-7">
                                    <!-- Start Large Image -->
                                    <div class="product-large-image modal-product-image-large swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-3/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-3/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-3/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-3/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-3/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-3/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Large Image -->
                                    <!-- Start Thumbnail Image -->
                                    <div
                                        class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                     src="assets/images/product/default/home-3/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                     src="assets/images/product/default/home-3/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                     src="assets/images/product/default/home-3/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                     src="assets/images/product/default/home-3/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                     src="assets/images/product/default/home-3/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                     src="assets/images/product/default/home-3/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                    </div>
                                    <!-- End Thumbnail Image -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price">
                                            <del>$70.00</del>
                                            $80.00
                                        </div>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red"
                                                           class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato"
                                                           class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green"
                                                           class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color"
                                                           id="modal-product-color-light-green" class="color-select"
                                                           type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue"
                                                           class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color"
                                                           id="modal-product-color-light-blue" class="color-select"
                                                           type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="variable-single-item ">
                                                <span>Quantity</span>
                                                <div class="product-variable-quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </div>

                                            <div class="product-add-to-cart-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <div class="modal-product-about-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae</p>
                                    </div>
                                    <!-- Start  Product Details Social Area-->
                                    <div class="modal-product-details-social">
                                        <span class="title">SHARE THIS PRODUCT</span>
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    <!-- Start Modal Add cart -->
    @foreach($products as $product)
        <div class="modal fade" id="modalAddcart-{{ $product->id }}" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col text-right">
                                    <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                    </button>
                                </div>
                            </div>
                            @if(auth()->check())
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="modal-add-cart-product-img">
                                                    <img class="img-fluid"
                                                         src="{{ asset('admin/product/'. $product->productImage->first()->image) }}"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added
                                                    to cart
                                                    successfully!
                                                </div>
                                                <div class="modal-add-cart-product-cart-buttons">
                                                    <a href="cart.html">View Cart</a>
                                                    <a href="{{ route('user.checkout', ['product' => $product->id]) }}">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 modal-border">
                                        <ul class="modal-add-cart-product-shipping-info">
                                            <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE
                                                    SHOPPING</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @else
                                <h1>You Must need to login First to cart a Product</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Modal Add cart -->
    @endforeach
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var basePath = "{{ asset('admin/product/') }}";
        var subTotal = 0;
        var count = 0;

        $(document).ready(function () {
            $('.add-to-cart-btn').click(function (e) {
                e.preventDefault();
                var productId = $(this).data('product-id');
                var productPrice = $(this).data('product-price');
                var quantity = 1;
                updateCart('/add-to-cart', {product_id: productId, quantity: quantity, price: productPrice});
            });

            $('.offcanvas-cart').on('click', '.cart-delete', function (e) {
                e.preventDefault();
                var cartId = $(this).data('cart-id');
                updateCart('/delete-cart', {cart_id: cartId});
            });
        });

        function updateCart(url, data) {
            $.ajax({
                url: url,
                type: 'POST',
                data: Object.assign({_token: '{{ csrf_token() }}'}, data),
                success: function (response) {
                    renderCart(response.data);
                },
                error: function (error) {
                    console.error('Cart update error:', error);
                }
            });
        }

        function renderCart(items) {
            $('.offcanvas-cart').empty();
            subTotal = 0;
            count = 0;

            items.forEach(function (item) {
                subTotal += parseFloat(item.total_price);
                count += 1;
                $('.offcanvas-cart').append(cartItemHtml(item));
            });

            $('.offcanvas-cart-total-price-value').text('৳ ' + subTotal);
            $('.cart-count').text(count);
        }

        function cartItemHtml(item) {
            return `
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img src="${basePath + '/' + item.product.product_image[0].image}" alt="" class="offcanvas-cart-image">
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="#" class="offcanvas-cart-item-link">${item.product.name}</a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">${item.quantity} x </span>
                            <span class="offcanvas-cart-item-details-price">$${item.price}</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete cart-delete" data-cart-id="${item.id}"><i class="fa fa-trash-o"></i></a>
                </div>
            </li>
        `;
        }
    </script>

@endpush
