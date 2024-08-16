@extends('front.layout.master')

@section('title', 'Product')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/rating-css.css') }}">
@endsection

@section('body')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
                        <li><a href="shop_grid.html" title="">Clutches</a> <span>/ </span> </li>
                        <li><a href="shop_grid.html" title="">Bucket Bag</a> <span>/</span> </li>
                        <li> <strong>Lorem ipsum dolor sit amet</strong> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-main">
                        <div class="product-view">
                            <div class="product-essential">
                                <form action="#" method="post" id="product">
                                    <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                        <div class="new-label new-top-left"> New </div>
                                        <div class="product-image">
                                            <div class="product-full"> <img class="img-responsive" id="product-zoom"
                                                    src="{{ asset('front/images/products/' . $product->productImages[0]->path) }}"
                                                    data-zoom-image="{{ asset('front/images/products/' . $product->productImages[0]->path) }}"
                                                    alt="product-image" /> </div>
                                            <div class="more-views">
                                                <div class="slider-items-products">
                                                    <div id="jtv-more-views-img"
                                                        class="product-flexslider hidden-buttons product-img-thumb">
                                                        <div class="slider-items slider-width-col4 block-content">
                                                            @foreach ($product->productImages as $productImage)
                                                                <div class="more-views-items">
                                                                    <a href="#"
                                                                        data-image="{{ asset('front/images/products/' . $productImage->path) }}"
                                                                        data-zoom-image="{{ asset('front/images/products/' . $productImage->path) }}">
                                                                        <img class="img-responsive" id="product-zoom"
                                                                            src="{{ asset('front/images/products/' . $productImage->path) }}"
                                                                            alt="product-image" />
                                                                    </a>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end: more-images -->
                                    </div>
                                    <div class="product-shop col-lg-7 col-sm-7 col-xs-12">
                                        <div class="product-next-prev"> <a class="product-next"
                                                href="#"><span></span></a> <a class="product-prev"
                                                href="#"><span></span></a> </div>
                                        <div class="product-name">
                                            <h1>{{ $product->name }}</h1>
                                        </div>
                                        <div class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $product->avgRating)
                                                    <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-o"></i>
                                                @endif
                                            @endfor
                                            <p class="rating-links">
                                                <a href="#">{{ count($product->productComments) }} Review(s)</a>
                                            </p>
                                        </div>
                                        <div class="price-block">
                                            <div class="price-box">
                                                @if ($product->discount != null)
                                                    <p class="special-price"> <span class="price-label">Special Price</span>
                                                        <span id="product-price-48" class="price">
                                                            {{ number_format($product->discount) }} VND </span>
                                                    </p>
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span>
                                                        <span class="price"> {{ number_format($product->price) }} VND
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span>
                                                        <span class="price"> {{ number_format($product->price) }} VND
                                                        </span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="info-orther">
                                            <p>Item Code: #{{ $product->sku }}</p>
                                            <p>Category: {{ $product->category->name }}</p>
                                            <p>Availability:
                                                @if ($product->qty > 0)
                                                    <span class="in-stock">In stock</span>
                                                @else
                                                    <span class="out-of-stock">Out of stock</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="short-description">
                                            <h2>Quick Overview</h2>
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        <div class="form-option">
                                            <p class="form-option-title">Available Options:</p>
                                            <div class="attributes">
                                                <div class="attribute-label">Color:</div>
                                                <div class="attribute-list">
                                                    <ul class="list-color">
                                                        @foreach (array_unique(array_column($product->productAttributes->toArray(), 'color')) as $productColor)
                                                            <li style="background:{{ $productColor }}"><a
                                                                    href="#">{{ $productColor }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="attributes">
                                                <div class="attribute-label">Size:</div>
                                                <div class="attribute-list">
                                                    <ul class="list-size">
                                                        @foreach (array_unique(array_column($product->productAttributes->toArray(), 'size')) as $productSize)
                                                            <li>
                                                                <input type="radio" name="size-{{ $productSize }}"
                                                                    id="size-{{ $productSize }}">
                                                                <label
                                                                    for="attr-{{ $productSize }}">{{ $productSize }}</label>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-to-box">
                                                <div class="add-to-cart">
                                                    <div class="pull-left">
                                                        <div class="custom pull-left">
                                                            <label>Qty :</label>
                                                            <button
                                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                                class="reduced items-count" type="button"><i
                                                                    class="fa fa-minus">&nbsp;</i></button>
                                                            <input type="text" class="input-text qty" title="Qty"
                                                                value="{{ $product->qty }}" maxlength="12"
                                                                id="qty" name="qty">
                                                            <button
                                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                                class="increase items-count" type="button"><i
                                                                    class="fa fa-plus">&nbsp;</i></button>
                                                        </div>
                                                    </div>
                                                    <button onClick="productAddToCartForm.submit(this)"
                                                        class="button btn-cart" title="Add to Cart" type="button">Add to
                                                        Cart</span></button>
                                                </div>
                                                <div class="email-addto-box">
                                                    <ul class="add-to-links">
                                                        <li><a class="link-wishlist" href="wishlist.html"><span>Add to
                                                                    Wishlist</span></a></li>
                                                        <li><span class="separator">|</span> <a class="link-compare"
                                                                href="compare.html"><span>Add to Compare</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-share">
                                            <div class="sendtofriend-print">
                                                <a href="javascript:print();"><i class="fa fa-print"></i> Print</a> <a
                                                    href="#"><i class="fa fa-envelope-o fa-fw"></i> Send to a
                                                    friend</a>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                        <div class="add_info">
                            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product
                                        Description </a></li>
                                <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
                                <li><a href="#reviews_tabs" data-toggle="tab">Reviews
                                        ({{ $product->productComments->count() }})</a></li>
                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                        {!! $product->content !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_tags">
                                    <div class="box-collateral box-tags">
                                        <div class="tags">
                                            <form id="addTagForm" action="#" method="get">
                                                <div class="form-add-tags">
                                                    <label for="productTagName">Add Tags:</label>
                                                    <div class="input-box">
                                                        <input class="input-text" name="productTagName"
                                                            id="productTagName" type="text">
                                                        <button type="button" title="Add Tags" class=" button btn-add"
                                                            onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                                    </div>
                                                    <!--input-box-->
                                                </div>
                                            </form>
                                        </div>
                                        <!--tags-->
                                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews_tabs">
                                    <div class="box-collateral box-reviews" id="customer-reviews">
                                        <div class="box-reviews1">
                                            <div class="form-add">
                                                <form id="review-form" method="post" action="">
                                                    @csrf
                                                    <h3>Write Your Own Review</h3>
                                                    <fieldset>
                                                        <span id="input-message-box"></span>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="personal-rating-title">
                                                                    <label class="required" for="rating">
                                                                        <h4>How do you rate this product? <em
                                                                                class="required">*</em></h4>
                                                                    </label>
                                                                    <div class="personal-rating">
                                                                        <input type="radio" id="star5"
                                                                            name="rating" class="personal-rating"
                                                                            value="5" />
                                                                        <label for="star5" title="text">5
                                                                            stars</label>
                                                                        <input type="radio" id="star4"
                                                                            name="rating" class="personal-rating"
                                                                            value="4" />
                                                                        <label for="star4" title="text">4
                                                                            stars</label>
                                                                        <input type="radio" id="star3"
                                                                            name="rating" class="personal-rating"
                                                                            value="3" />
                                                                        <label for="star3" title="text">3
                                                                            stars</label>
                                                                        <input type="radio" id="star2"
                                                                            name="rating" class="personal-rating"
                                                                            value="2" />
                                                                        <label for="star2" title="text">2
                                                                            stars</label>
                                                                        <input type="radio" id="star1"
                                                                            name="rating" class="personal-rating"
                                                                            value="1" />
                                                                        <label for="star1" title="text">1
                                                                            star</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="review1">
                                                            <ul class="form-list">
                                                                <li>
                                                                    <label class="required"
                                                                        for="email_field">Email<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $product->id }}">
                                                                        <input type="hidden" name="user_id"
                                                                            value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                                                                        <input type="email" class="input-text"
                                                                            id="email_field" name="email">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label class="required" for="nickname_field">Your
                                                                        name<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <input type="text" class="input-text"
                                                                            id="nickname_field" name="nickname"
                                                                            value="">
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="review2">
                                                            <ul>
                                                                <li>
                                                                    <label class="required "
                                                                        for="messages_field">Review<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <textarea rows="3" cols="5" id="messages_field" name="messages"></textarea>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="buttons-set">
                                                                <button class="button submit" title="Submit Review"
                                                                    type="submit"><span>Submit Review</span></button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="box-reviews2">
                                            <h3>Customer Reviews</h3>
                                            <div class="box visible">
                                                <ul>
                                                    @foreach ($product->productComments as $productComment)
                                                        <li>
                                                            <table class="ratings-table">
                                                                <colgroup>
                                                                    <col width="1">
                                                                    <col>
                                                                </colgroup>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Rate&nbsp;&nbsp;&nbsp;</th>
                                                                        <td>
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width:100%;">
                                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                                        @if ($i <= $product->avgRating)
                                                                                            <i class="fa fa-star"></i>
                                                                                        @else
                                                                                            <i class="fa fa-star-o"></i>
                                                                                        @endif
                                                                                    @endfor
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="review">
                                                                <h6><a href="#">Excellent</a></h6>
                                                                <small>Review by
                                                                    <span>{{ $productComment->nickname }}
                                                                    </span>on
                                                                    {{ date('M-d-Y', strtotime($productComment->created_at)) }}
                                                                </small>
                                                                <div class="review-txt">
                                                                    {!! $productComment->messages !!}
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="actions"> <a class="button view-all" id="revies-button"
                                                    href="#"><span><span>View all</span></span></a> </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->

    <!-- Related Products Slider -->

    <div class="container">
        <div class="related-section">
            <div class="slider-items-products">
                <div class="related-block">
                    <div class="jtv-block-inner">
                        <div class="block-title">
                            <h2>Related products</h2>
                        </div>
                    </div>
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid block-content">
                            @foreach ($relatedProducts as $relatedProduct)
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info">
                                                <img class="img-responsive" alt="{{ $relatedProduct->name }}"
                                                    src="{{ asset('front/images/products/' . $relatedProduct->productImages[0]->path) }}">
                                                @if ($relatedProduct->discount != null)
                                                    <div class="sale-label sale-top-right">Sale</div>
                                                @endif
                                                <div class="mask-shop-white"></div>
                                                <a href="{{ route('shop.show', $relatedProduct->id) }}"
                                                    class="product-link"> </a>
                                                <div class="product-actions">
                                                    <a href="shopping_cart.html"><i class="fa fa-cart-plus"></i>
                                                        <span> Add to cart</span>
                                                    </a>
                                                    <a href="href="{{ route('shop.show', $relatedProduct->id) }}"">
                                                        <i class="fa fa-heart-o"></i>
                                                        <span> Add to Wishlist</span>
                                                    </a>
                                                    <a href="href="{{ route('shop.show', $relatedProduct->id) }}""
                                                        class="add-to-compare">
                                                        <i class="fa fa-signal"></i>
                                                        <span>Compare</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="{{ $relatedProduct->name }}"
                                                        href="{{ route('shop.show', $relatedProduct->id) }}">
                                                        {{ $relatedProduct->name }} </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $product->avgRating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                                <i class="fa fa-star-o"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <div class="price-box">
                                                                @if ($relatedProduct->discount != null)
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> {{number_format($relatedProduct->discount)}} VND</span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> {{number_format($relatedProduct->price)}} VND</span> </p>
                                                                @else
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> {{number_format($relatedProduct->price)}} VND</span> </p>
                                                                @endif
                                                              </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Slider End -->


@endsection

@section('scripts')

    <!-- cloud zoom js -->
    <script src="{{ asset('front/js/cloud-zoom.js') }}"></script>
@endsection
