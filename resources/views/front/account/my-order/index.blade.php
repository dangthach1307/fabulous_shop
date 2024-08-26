@extends('front.layout.master')

@section('title', 'My orders')

@section('css')
@endsection
@section('body_class', 'dashboard-page')
@section('body')

    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section class="col-sm-9 wow">
                    <div class="col-main">
                        <div class="my-account">
                            <div class="page-title">
                                <h2>My Dashboard</h2>
                            </div>
                            <div class="dashboard">
                                <div class="welcome-msg"> <strong>Hello,
                                        {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}!</strong>
                                    <p>From your My Account Dashboard you have the ability to view a snapshot of your recent
                                        account activity and update your account information. Select a link below to view or
                                        edit information.</p>
                                </div>
                                <div class="recent-orders">
                                    <div class="title-buttons"><strong>Recent Orders</strong> <a href="#">View All
                                        </a> </div>
                                    <div class="table-responsive">
                                        <table class="data-table" id="my-orders-table">
                                            <thead>
                                                <tr class="first last">
                                                    <th>Order #</th>
                                                    <th>Products</th>
                                                    <th><span class="nobr">Order Total</span></th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr class="first odd">
                                                        <td>{{ $order->id }}</td>
                                                        <td>
                                                            {{ $order->orderDetails[0]->product->name }}
                                                            @if (count($order->orderDetails) > 1)
                                                                (and {{ count($order->orderDetails) - 1 }} other items)
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span class="price">
                                                                ${{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}
                                                            </span>
                                                        </td>
                                                        <td class="a-center last">
                                                            <span class="nobr">
                                                                <a href="{{ route('account.my-order.show', $order->id) }}">View
                                                                    Order</a>
                                                                <span class="separator">|</span>
                                                                <a href="#">Reorder</a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="box-account">
                                    <div class="page-title">
                                        <h2>Account Information</h2>
                                    </div>
                                    <div class="col2-set">
                                        <div class="col-1">
                                            <h5>Contact Information</h5>
                                            <a href="#">Edit</a>
                                            <p> Vince Roy<br>
                                                support@example.com<br>
                                                <a href="#">Change Password</a>
                                            </p>
                                        </div>
                                        <div class="col-2">
                                            <h5>Newsletters</h5>
                                            <a href="#">Edit</a>
                                            <p> You are currently not subscribed to any newsletter. </p>
                                        </div>
                                    </div>
                                    <div class="col2-set">
                                        <h4>Address Book</h4>
                                        <div class="manage_add"><a href="#">Manage Addresses</a> </div>
                                        <div class="col-1">
                                            <h5>Primary Billing Address</h5>
                                            <address>
                                                Vince Roy<br>
                                                Company, <br>
                                                12/34 - West 21st Street,<br>
                                                New York,<br>
                                                USA<br>
                                                T: 564235 <br>
                                                <a href="#">Edit Address</a>
                                            </address>
                                        </div>
                                        <div class="col-2">
                                            <h5>Primary Shipping Address</h5>
                                            <address>
                                                Vince Roy<br>
                                                Company, <br>
                                                12/34 - West 21st Street,<br>
                                                New York,<br>
                                                USA<br>
                                                T: 564235 <br>
                                                <a href="#">Edit Address</a>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="col-right sidebar col-sm-3 wow">
                    <div class="block block-account">
                        <div class="block-title">My Account</div>
                        <div class="block-content">
                            <ul>
                                <li class="current"><a href="dashboard.html">Account Dashboard</a></li>
                                <li><a href="my-account-information.html">Account Information</a></li>
                                <li><a href="my-address.html">Address Book</a></li>
                                <li><a href="my-order.html">My Orders</a></li>
                                <li><a href="#">Billing Agreements</a></li>
                                <li><a href="#">Recurring Profiles</a></li>
                                <li><a href="#">My Product Reviews</a></li>
                                <li><a href="#">My Tags</a></li>
                                <li><a href="wishlist.html">My Wishlist</a></li>
                                <li><a href="#">My Downloadable</a></li>
                                <li><a href="#">Newsletter Subscriptions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="block block-compare">
                        <div class="block-title "><span>Compare Products (3)</span></div>
                        <div class="block-content">
                            <ol id="compare-items">
                                <li class="item">
                                    <input type="hidden" value="2173" class="compare-item-id">
                                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#"
                                        class="product-name">Product Title Here</a>
                                </li>
                                <li class="item">
                                    <input type="hidden" value="2174" class="compare-item-id">
                                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#"
                                        class="product-name">Product Title Here</a>
                                </li>
                                <li class="item">
                                    <input type="hidden" value="2175" class="compare-item-id">
                                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#"
                                        class="product-name">Product Title Here</a>
                                </li>
                            </ol>
                            <div class="ajax-checkout">
                                <button type="submit" title="Submit"
                                    class="button button-compare"><span>Compare</span></button>
                                <button type="submit" title="Submit"
                                    class="button button-clear"><span>Clear</span></button>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection
