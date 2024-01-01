@extends('welcome')
@section('content')
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Checkout</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Checkout Section:::... -->
    <div class="checkout-section">
        <div class="container">
            <div class="row">
                <!-- User Quick Action Form -->
{{--                <div class="col-12">--}}
{{--                    <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="0">--}}
{{--                        <h3>--}}
{{--                            <i class="fa fa-file-o" aria-hidden="true"></i>--}}
{{--                            Returning customer?--}}
{{--                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login"--}}
{{--                               aria-expanded="true">Click here to login</a>--}}
{{--                        </h3>--}}
{{--                        <div id="checkout_login" class="collapse" data-parent="#checkout_login">--}}
{{--                            <div class="checkout_info">--}}
{{--                                <p>If you have shopped with us before, please enter your details in the boxes below. If--}}
{{--                                    you are a new customer please proceed to the Billing &amp; Shipping section.</p>--}}
{{--                                <form action="#">--}}
{{--                                    <div class="form_group default-form-box">--}}
{{--                                        <label>Username or email <span>*</span></label>--}}
{{--                                        <input type="text">--}}
{{--                                    </div>--}}
{{--                                    <div class="form_group default-form-box">--}}
{{--                                        <label>Password <span>*</span></label>--}}
{{--                                        <input type="password">--}}
{{--                                    </div>--}}
{{--                                    <div class="form_group group_3 default-form-box">--}}
{{--                                        <button class="btn btn-md btn-black-default-hover" type="submit">Login</button>--}}
{{--                                        <label class="checkbox-default">--}}
{{--                                            <input type="checkbox">--}}
{{--                                            <span>Remember me</span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                    <a href="#">Lost your password?</a>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">--}}
{{--                        <h3>--}}
{{--                            <i class="fa fa-file-o" aria-hidden="true"></i>--}}
{{--                            Returning customer?--}}
{{--                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon"--}}
{{--                               aria-expanded="true">Click here to enter your code</a>--}}

{{--                        </h3>--}}
{{--                        <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">--}}
{{--                            <div class="checkout_info">--}}
{{--                                <form action="#">--}}
{{--                                    <input placeholder="Coupon code" type="text">--}}
{{--                                    <button class="btn btn-md btn-black-default-hover" type="submit">Apply--}}
{{--                                        coupon</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- User Quick Action Form -->
            </div>
            <!-- Start User Details Checkout Form -->
            <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="default-form-box">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" name="full_name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Company Name</label>
                                        <input type="text" name="company_name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label for="country">country <span>*</span></label>
                                        <select class="country_option nice-select wide" name="country" id="country">
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Street address <span>*</span></label>
                                        <input placeholder="House number and street name" type="text" name="address1" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text" name="address2">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Town / City <span>*</span></label>
                                        <input type="text" name="town_city" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label> Email Address <span>*</span></label>
                                        <input type="email" name="email" value="{{ auth()->user()->email }}" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="order-notes">
                                        <label for="order_note">Order Notes</label>
                                        <textarea id="order_note" name="note"
                                                  placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td> {{ $item->product->name }} <strong> × {{ $item->quantity }}</strong></td>
                                            <td> ৳ {{ $item->total_price }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td> ৳ {{ $subtotal }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong> ৳ 0</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong> ৳ {{ $subtotal }}</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse"
                                           data-bs-target="#methodCod">
                                        <input type="radio" id="currencyCod" name="payment_type">
                                        <span>Cash on Delivery</span>
                                    </label>

                                    <div id="methodCod" class="collapse" data-parent="#methodCod">

                                    </div>
                                </div>
                                <div class="panel-default">
                                    <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                           data-bs-target="#methodPaypal">
                                        <input type="radio" id="currencyPaypal" name="payment_type" disabled>
                                        <span>Online Payment</span>
                                    </label>
                                    <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">

                                    </div>
                                </div>
                                <div class="order_button pt-3">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">Proceed</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- Start User Details Checkout Form -->
        </div>
    </div><!-- ...:::: End Checkout Section:::... -->
@endsection
