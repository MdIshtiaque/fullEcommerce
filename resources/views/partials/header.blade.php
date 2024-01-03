<header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
        <div class="header-bottom header-bottom-color--black section-fluid sticky-header sticky-color--black">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Start Header Logo -->
                        <div class="header-logo">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo_white.png') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- End Header Logo -->

                        <!-- Start Header Main Menu -->
                        <div class="main-menu menu-color--white menu-hover-color--pink">
                            <nav>
                                <ul>
                                    <li class="has-dropdown">
                                        <a class="active main-menu-link" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="has-dropdown has-megaitem">
                                        <a href="product-details-default.html">Shop <i
                                                class="fa fa-angle-down"></i></a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <ul class="mega-menu-inner">
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Cateegories</a>
                                                    <ul class="mega-menu-sub">
                                                        @foreach($categories as $category)
                                                            <li><a href="{{ route('category.products', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                                                        @endforeach
                                                            <li><a href="{{ route('allProducts') }}">All Products</a></li>
                                                    </ul>
                                                </li>
{{--                                                <!-- Mega Menu Sub Link -->--}}
{{--                                                <li class="mega-menu-item">--}}
{{--                                                    <a href="#" class="mega-menu-item-title">Other Pages</a>--}}
{{--                                                    <ul class="mega-menu-sub">--}}
{{--                                                        <li><a href="cart.html">Cart</a></li>--}}
{{--                                                        <li><a href="empty-cart.html">Cart</a></li>--}}
{{--                                                        <li><a href="wishlist.html">Wishlist</a></li>--}}
{{--                                                        <li><a href="compare.html">Compare</a></li>--}}
{{--                                                        <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                                        <li><a href="login.html">Login</a></li>--}}
{{--                                                        <li><a href="my-account.html">My Account</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <!-- Mega Menu Sub Link -->--}}
{{--                                                <li class="mega-menu-item">--}}
{{--                                                    <a href="#" class="mega-menu-item-title">Product Types</a>--}}
{{--                                                    <ul class="mega-menu-sub">--}}
{{--                                                        <li><a href="product-details-default.html">Product--}}
{{--                                                                Default</a></li>--}}
{{--                                                        <li><a href="product-details-variable.html">Product--}}
{{--                                                                Variable</a></li>--}}
{{--                                                        <li><a href="product-details-affiliate.html">Product--}}
{{--                                                                Referral</a></li>--}}
{{--                                                        <li><a href="product-details-group.html">Product Group</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li><a href="product-details-single-slide.html">Product--}}
{{--                                                                Slider</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <!-- Mega Menu Sub Link -->--}}
{{--                                                <li class="mega-menu-item">--}}
{{--                                                    <a href="#" class="mega-menu-item-title">Product Types</a>--}}
{{--                                                    <ul class="mega-menu-sub">--}}
{{--                                                        <li><a href="product-details-tab-left.html">Product Tab--}}
{{--                                                                Left</a></li>--}}
{{--                                                        <li><a href="product-details-tab-right.html">Product Tab--}}
{{--                                                                Right</a></li>--}}
{{--                                                        <li><a href="product-details-gallery-left.html">Product--}}
{{--                                                                Gallery Left</a></li>--}}
{{--                                                        <li><a href="product-details-gallery-right.html">Product--}}
{{--                                                                Gallery Right</a></li>--}}
{{--                                                        <li><a href="product-details-sticky-left.html">Product--}}
{{--                                                                Sticky Left</a></li>--}}
{{--                                                        <li><a href="product-details-sticky-right.html">Product--}}
{{--                                                                Sticky right</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
                                            </ul>
                                            <div class="menu-banner">
                                                <a href="#" class="menu-banner-link">
                                                    <img class="menu-banner-img"
                                                         src="{{ asset('assets/images/banner/menu-banner.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End Header Main Menu Start -->

                        <!-- Start Header Action Link -->
                        <ul class="header-action-link action-color--white action-hover-color--pink">
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count cart-count" >{{ optional($cartItems)->count()?? 0 }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-profile" class="offacnvas offside-about offcanvas-toggle" style="margin-left: 5px">
                                    <i class="icon-people"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Header Action Link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
