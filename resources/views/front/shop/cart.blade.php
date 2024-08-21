@extends('front.layout.master')

@section('title', 'Cart')

@section('css')
@endsection
@section('body_class', 'shopping-cart-page')
@section('body')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="shopping-cart-inner">
                    <div class="page-title">
                        <h2>Shopping Cart Summary</h2>
                    </div>
                    <div class="page-content">
                        {{-- <ul class="step">
                            <li class="current-step"><span>01. Summary</span></li>
                            <li><span>02. Sign in</span></li>
                            <li><span>03. Address</span></li>
                            <li><span>04. Shipping</span></li>
                            <li><span>05. Payment</span></li>
                        </ul> --}}
                        <div class="heading-counter warning cart-count"><span>Your shopping cart contains:
                                {{ Cart::count() }}
                                Product(s)</span>
                        </div>
                        @if (Cart::count() > 0)
                            <div class="table-responsive">
                                <div class="order-detail-content">
                                    <table class="table table-bordered jtv-cart-summary">
                                        <thead>
                                            <tr>
                                                <th class="cart_product">Product</th>
                                                <th>Description</th>
                                                <th>Avail.</th>
                                                <th>Unit price</th>
                                                <th width="120px">Qty</th>
                                                <th>Total</th>
                                                <th class="action">
                                                    <i onclick="confirm('Are you sure to delete all items ?') === true ? destroyCart() : ''"
                                                        style="cursor:pointer" class="fa fa-trash-o"></i>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $cart)
                                                <tr data-rowId="{{ $cart->rowId }}">
                                                    <td class="cart_product">
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ asset('front/images/products/' . $cart->options->images[0]->path) }}"
                                                                alt="Product"></a>
                                                    </td>
                                                    <td class="cart_description">
                                                        <p class="product-name"><a href="#"> {{ $cart->name }} </a>
                                                        </p>
                                                        <small class="cart_ref">SKU : #{{ $cart->sku }}</small><br>
                                                        <small><a href="#">Color : Black</a></small><br>
                                                    </td>
                                                    <td class="cart_avail"><span class="label label-success">In stock</span>
                                                    </td>
                                                    <td class="price"><span>${{ $cart->price }}</span></td>
                                                    <td class="qty">
                                                        <div class="input-group pro-qty">
                                                            <input id="qty" data-rowId="{{ $cart->rowId }}" width="50px"
                                                                class="form-control input-sm" type="text"
                                                                value="{{ $cart->qty }}">

                                                        </div>
                                                    </td>


                                                    <td class="price total-price">
                                                        <span>${{ $cart->price * $cart->qty }}</span></td>
                                                    <td class="action"><i class="fa fa-trash"
                                                            onclick="removeCart('{{ $cart->rowId }}')"></i></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2" rowspan="2"></td>
                                                <td colspan="3">Subtotal</td>
                                                <td colspan="2" class="cart-subtotal"><span>${{ $subtotal }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><strong>Total</strong></td>
                                                <td colspan="2" class="cart-total">
                                                    <strong><span>${{ $total }}</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="cart_navigation">
                                        <button class="button continue-shopping" title="Continue shopping"
                                            type="button"><span>Continue shopping</span></button>
                                        <button class="button btn-proceed-checkout" title="Proceed to Checkout"
                                            type="button"><span>Proceed to Checkout</span></button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="table-responsive">
                                <h4>Your cart is empty</h4>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="jtv-crosssel-pro">
                    <div class="block-title">
                        <h2>You May be interested</h2>
                    </div>


                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><img class="img-responsive" alt="Product Title Here"
                                                src="../images/products/product-fashion-1.jpg"><a href="single_product.html"
                                                class="product-link"> </a>
                                            <div class="product-actions"> <a href="shopping_cart.html"><i
                                                        class="fa fa-cart-plus"></i><span> Add to cart</span></a><a
                                                    href="wishlist.html"><i class="fa fa-heart-o"></i><span> Add to
                                                        Wishlist</span></a> <a href="compare.html" class="add-to-compare"><i
                                                        class="fa fa-signal"></i><span>Compare</span></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$155.00</span> </span> </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><img class="img-responsive" alt="Product Title Here"
                                                src="../images/products/product-fashion-1.jpg"><a
                                                href="single_product.html" class="product-link"> </a>
                                            <div class="product-actions"> <a href="shopping_cart.html"><i
                                                        class="fa fa-cart-plus"></i><span> Add to cart</span></a><a
                                                    href="wishlist.html"><i class="fa fa-heart-o"></i><span> Add to
                                                        Wishlist</span></a> <a href="compare.html"
                                                    class="add-to-compare"><i
                                                        class="fa fa-signal"></i><span>Compare</span></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$225.00</span> </span> </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><img class="img-responsive" alt="Product Title Here"
                                                src="../images/products/product-fashion-1.jpg"><a
                                                href="single_product.html" class="product-link"> </a>
                                            <div class="product-actions"> <a href="shopping_cart.html"><i
                                                        class="fa fa-cart-plus"></i><span> Add to cart</span></a><a
                                                    href="wishlist.html"><i class="fa fa-heart-o"></i><span> Add to
                                                        Wishlist</span></a> <a href="compare.html"
                                                    class="add-to-compare"><i
                                                        class="fa fa-signal"></i><span>Compare</span></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$99.00</span> </span> </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><img class="img-responsive" alt="Product Title Here"
                                                src="../images/products/product-fashion-1.jpg"><a
                                                href="single_product.html" class="product-link"> </a>
                                            <div class="product-actions"> <a href="shopping_cart.html"><i
                                                        class="fa fa-cart-plus"></i><span> Add to cart</span></a><a
                                                    href="wishlist.html"><i class="fa fa-heart-o"></i><span> Add to
                                                        Wishlist</span></a> <a href="compare.html"
                                                    class="add-to-compare"><i
                                                        class="fa fa-signal"></i><span>Compare</span></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special
                                                                Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular
                                                                Price:</span> <span class="price"> $167.00 </span> </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
