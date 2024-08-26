@extends('front.layout.master')

@section('title', 'My orders')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/payment_type.css') }}">
@endsection
@section('body_class', 'dashboard-page')
@section('body')

    <div class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <section class="col-sm-12 col-xs-12">
                    <div class="col-main">
                        <div class="page-title">
                            <h1>Checkout</h1>
                        </div>
                        <div class="page-content checkout-page">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-content">
                                        <a href="#" class="content-btn">
                                            Order ID:
                                            <b>#{{ $order->id }}</b>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-content">
                                        <a href="#" class="content-btn">
                                            Status:
                                            <b>{{ \App\Utilities\Constant::$order_status[$order->status] }}</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="checkout-sep">Billing Infomations</h3>
                                    <div class="box-border">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="first_name" class="required">First Name</label>
                                                <input type="text" class="input form-control" name="first_name" readonly
                                                    id="first_name" value="{{ $order->first_name }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="last_name" class="required">Last Name</label>
                                                <input type="text" class="input form-control" name="last_name" readonly
                                                    id="last_name" value="{{ $order->last_name }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="country" class="required">Country</label>
                                                <input type="text" class="input form-control" name="country" readonly
                                                    id="country" value="{{ $order->country }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="company_name">Company name</label>
                                                <input type="text" class="input form-control" name="company_name" readonly
                                                    id="company_name" value="{{ $order->company_name }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="street_address" class="required">Street address</label>
                                                <input type="text" class="input form-control" name="street_address" readonly
                                                    id="street_address" value="{{ $order->street_address }}">
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="postcode_zip">Zip/Postal Code (Optional)</label>
                                                <input class="input form-control" type="text" name="postcode_zip" readonly
                                                    id="postcode_zip" value="{{ $order->postcode_zip }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="town_city" class="required">Town/City</label>
                                                <input class="input form-control" type="text" name="town_city" readonly
                                                    id="town_city" value="{{ $order->town_city }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="email" class="required">Email Address</label>
                                                <input class="input form-control" type="text" name="email" readonly
                                                    id="email" value="{{ $order->email }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="phone" class="required">Phone</label>
                                                <input class="input form-control" type="text" name="phone" readonly
                                                    id="phone" value="{{ $order->phone }}">
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
                                                        @foreach ($order->orderDetails as $orderDetail)
                                                            <tr>
                                                                <td class="cart_description">
                                                                    <p class="product-name">
                                                                        {{ $orderDetail->product->name }}
                                                                        x<span>{{ $orderDetail->qty }}</span>
                                                                    </p>
                                                                </td>
                                                                <td class="price total-price">
                                                                    <span>${{ $orderDetail->total }}</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-left h4"><strong>Total</strong></td>
                                                            <td class="cart-total">
                                                                <strong><span>${{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}</span></strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <ul class="payment_check">
                                                    <li>
                                                        <label for="pc-direct">
                                                            <input type="radio" name="payment_type" disabled
                                                                {{ $order->payment_type == 'direct' ? 'checked' : '' }}
                                                                class="payment-radio" id="pc-direct" value="direct">
                                                            <span class="checkmark"></span>
                                                            Direct Cash
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label for="pc-paypal">
                                                            <input type="radio" name="payment_type" disabled
                                                                {{ $order->payment_type == 'paypal' ? 'checked' : '' }}
                                                                class="payment-radio" id="pc-paypal" value="paypal">
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

                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
