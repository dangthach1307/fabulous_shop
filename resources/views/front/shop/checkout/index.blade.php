@extends('front.layout.master')

@section('title', 'Checkout')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/payment_type.css') }}">
@endsection
@section('body_class', '')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="{{ route('home') }}" title="Go to Home Page">Home</a> <span>/</span> </li>
                        <li> <strong>Checkout</strong> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main-container -->
    <div class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <section class="col-sm-12 col-xs-12">
                    <div class="col-main">
                        <div class="page-title">
                            <h1>Checkout</h1>
                        </div>
                        <div class="page-content checkout-page">
                            <form action="" method="post" class="checkout-form">
                                @csrf

                                <div class="row">
                                    @if (Cart::count() > 0)
                                        <div class="col-md-7">
                                            <h3 class="checkout-sep">Billing Infomations</h3>
                                            <div class="box-border">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="first_name" class="required">First Name</label>
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id ?? null }}">
                                                        <input type="text" class="input form-control" name="first_name"
                                                            id="first_name" value="{{ Auth::user()->first_name ?? '' }}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="last_name" class="required">Last Name</label>
                                                        <input type="text" class="input form-control" name="last_name"
                                                            id="last_name" value="{{ Auth::user()->last_name ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label for="country" class="required">Country</label>
                                                        <input type="text" class="input form-control" name="country"
                                                            id="country" value="{{ Auth::user()->country ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label for="company_name">Company name</label>
                                                        <input type="text" class="input form-control" name="company_name"
                                                            id="company_name"
                                                            value="{{ Auth::user()->company_name ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label for="street_address" class="required">Street address</label>
                                                        <input type="text" class="input form-control"
                                                            name="street_address" id="street_address"
                                                            value="{{ Auth::user()->street_address ?? '' }}">
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="postcode_zip">Zip/Postal Code (Optional)</label>
                                                        <input class="input form-control" type="text" name="postcode_zip"
                                                            id="postcode_zip"
                                                            value="{{ Auth::user()->postcode_zip ?? '' }}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="town_city" class="required">Town/City</label>
                                                        <input class="input form-control" type="text" name="town_city"
                                                            id="town_city" value="{{ Auth::user()->town_city ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="email" class="required">Email Address</label>
                                                        <input class="input form-control" type="text" name="email"
                                                            id="email" value="{{ Auth::user()->email ?? '' }}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="phone" class="required">Phone</label>
                                                        <input class="input form-control" type="text" name="phone"
                                                            id="phone" value="{{ Auth::user()->phone ?? '' }}">
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="new_account" id="new_account">
                                                    <label for="new_account">Create new account?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="checkout-sep">Your Order</h3>
                                            <div class="box-border table-bordered" style="padding: 10px">
                                                <div class="table-responsive">
                                                    <div class="order-detail-content">
                                                        <table class="table jtv-cart-summary" style="padding: 10px">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cart_product h4">Product</th>
                                                                    <th class="text-right h4">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($carts as $cart)
                                                                    <tr data-rowId="{{ $cart->rowId }}">
                                                                        <td class="cart_description">
                                                                            <p class="product-name">
                                                                                {{ $cart->name }}
                                                                                x<span>{{ $cart->qty }}</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="price total-price">
                                                                            <span>${{ $cart->price * $cart->qty }}</span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td class="text-left h4">Subtotal</td>
                                                                    <td class="cart-subtotal">
                                                                        <span>${{ $subtotal }}</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left h4"><strong>Total</strong></td>
                                                                    <td class="cart-total">
                                                                        <strong><span>${{ $total }}</span></strong>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        <ul class="payment_check">
                                                            <li>
                                                                <label for="pc-direct">
                                                                    <input type="radio" name="payment_type"
                                                                        class="payment-radio" id="pc-direct"
                                                                        value="direct">
                                                                    <span class="checkmark"></span>
                                                                    Direct Cash
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="pc-paypal">
                                                                    <input type="radio" name="payment_type"
                                                                        class="payment-radio" id="pc-paypal"
                                                                        value="paypal">
                                                                    <span class="checkmark"></span>
                                                                    Online Payment
                                                                </label>
                                                            </li>
                                                        </ul>
                                                        <div class="cart_checkout text-center">
                                                            <button class="button btn-lg btn_placeorder">Place
                                                                Order</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-md-12">
                                            <h3 class="checkout-sep">You don't have any product in your cart</h3>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--End main-container -->
@endsection
