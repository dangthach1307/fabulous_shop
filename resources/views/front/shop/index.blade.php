@extends('front.layout.master')

@section('title', 'Shop')
@section('body_class', 'category-page')
@section('body')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>&raquo;</span> </li>
                        <li><a href="shop_grid.html" title="">Clothing</a> <span>&raquo; </span> </li>
                        <li><a href="shop_grid.html" title="">Women</a> <span>&raquo;</span> </li>
                        <li> <strong>Dresses</strong> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Main Container -->
    <section class="main-container col2-right-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img class="img-responsive" alt=""
                                                src="{{ asset('front/images/category-img1.jpg') }}"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag">fall collection 2018</div>
                                            <h2 class="cat-heading">special collection</h2>
                                            <p>order more than $99 & get up to 75% off!</p>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img class="img-responsive" alt=""
                                                src="{{ asset('front/images/category-img2.jpg') }}"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag">Really Great Choice</div>
                                            <h2 class="cat-heading">Listen to Beauty</h2>
                                            <p>Enjoy great sound with superb portability. </p>
                                        </div>
                                        <!-- End Item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-main">
                        <h2 class="page-heading">
                            <span class="page-heading-title"> Category name here</span>
                        </h2>
                        <div class="toolbar">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <div class="btn-group">
                                        <div id="grid-view" class="btn btn-default active" data-toggle="tooltip"
                                            title="Grid"><a href="shop_grid.html"><i class="fa fa-th"></i></a></div>
                                        <div id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><a
                                                href="shop_list.html"><i class="fa fa-th-list"></i></a></div>
                                    </div>
                                    <a href="compare.html" id="compare-total">Product Compare (3)</a>
                                </div>
                                <div class="col-sm-2 text-right sort-by">
                                    <label class="control-label" for="input-sort">Sort By:</label>
                                </div>
                                <form action="">
                                    <div class="col-md-3 col-sm-2 text-right">
                                        <select id="input-sort" name="sord_by" class="form-control col-sm-3" onchange="this.form.submit();">
                                            <option {{request('sord_by') == 'latest' ? 'selected' : ''}} value="latest" selected="selected">Latest</option>
                                            <option {{request('sord_by') == 'oldest' ? 'selected' : ''}} value="oldest">Oldest</option>
                                            <option {{request('sord_by') == 'name-asc' ? 'selected' : ''}} value="name-asc">Name (A - Z)</option>
                                            <option {{request('sord_by') == 'name-desc' ? 'selected' : ''}} value="name-desc">Name (Z - A)</option>
                                            <option {{request('sord_by') == 'price-asc' ? 'selected' : ''}} value="price-asc">Price (Low &gt; High)</option>
                                            <option {{request('sord_by') == 'price-desc' ? 'selected' : ''}} value="price-desc">Price (High &gt; Low)</option>
                                            {{-- <option value="">Rating (Highest)</option>
                                            <option value="">Rating (Lowest)</option> --}}
                                        </select>
                                    </div>
                                    <div class="col-sm-1 text-right show-limit">
                                        <label class="control-label" for="input-limit">Show:</label>
                                    </div>
                                    <div class="col-sm-2 text-right">
                                        <select id="input-limit" class="form-control" name="show" onchange="this.form.submit();">
                                            <option {{request('show') == 4 ? 'selected' : ''}} value="4" selected="selected">4</option>
                                            <option {{request('show') == 8 ? 'selected' : ''}} value="8">8</option>
                                            <option {{request('show') == 12 ? 'selected' : ''}} value="12">12</option>
                                            <option {{request('show') == 16 ? 'selected' : ''}} value="16">16</option>
                                            <option {{request('show') == 32 ? 'selected' : ''}} value="32">32</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="category-products">
                            <ul class="products-grid">
                                @foreach ($products as $product)
                                    <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info">
                                                    <img class="img-responsive" alt="{{ $product->name }}"
                                                        src="{{ asset('front/images/products/' . $product->productImages[0]->path) }}">
                                                    <a href="{{ route('shop.show', $product->id) }}" class="product-link">
                                                    </a>
                                                    @if ($product->discount != null)
                                                        <div class="sale-label sale-top-right">Sale</div>
                                                    @endif
                                                    <div class="mask-shop-white"></div>
                                                    <div class="product-actions">
                                                        <a href="shopping_cart.html">
                                                            <i class="fa fa-cart-plus"></i>
                                                            <span> Add to cart</span>
                                                        </a>
                                                        <a href="wishlist.html">
                                                            <i class="fa fa-heart-o"></i>
                                                            <span> Add to
                                                                Wishlist</span>
                                                        </a>
                                                        <a href="compare.html" class="add-to-compare">
                                                            <i class="fa fa-signal"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="{{ $product->name }}"
                                                            ref="{{ route('shop.show', $product->id) }}">
                                                            {{ $product->name }} </a> </div>
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
                                                            @if ($product->discount != null)
                                                                <p class="special-price">
                                                                    <span class="price-label">Special Price</span>
                                                                    <span class="price">
                                                                        {{ number_format($product->discount) }}
                                                                        VND</span>
                                                                </p>
                                                                <p class="old-price">
                                                                    <span class="price-label">Regular
                                                                        Price:</span>
                                                                    <span class="price">
                                                                        {{ number_format($product->price) }}
                                                                        VND</span>
                                                                </p>
                                                            @else
                                                                <p class="special-price">
                                                                    <span class="price-label">Regular
                                                                        Price:</span>
                                                                    <span class="price">
                                                                        {{ number_format($product->price) }}
                                                                        VND</span>
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="toolbar">
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                    <ul class="pagination">
                                        {{-- {!!$products->links()!!}
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">&gt;</a></li>
                                        <li><a href="#">&gt;|</a></li> --}}
                                        <x-custom-paginator :paginator="$products" />
                                    </ul>
                                </div>
                                <div class="col-sm-6 text-right">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} ({{ $products->lastPage() }} Pages)</div>
                            </div>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <div class="sidebar col-sm-4 col-md-3 col-xs-12 col-md-pull-9 col-sm-pull-8">
                    <aside class="sidebar">
                        <div class="block block-layered-nav">
                            <div class="block-title">Shop By</div>
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <dl id="narrow-by-list">
                                    <dt class="odd">Price</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li><a href="#"><span class="price">$0.00</span> - <span
                                                        class="price">$99.99</span></a> (6) </li>
                                            <li><a href="#"><span class="price">$100.00</span> and above</a> (6)
                                            </li>
                                        </ol>
                                    </dd>
                                    <dt class="even">Category</dt>
                                    <dd class="even">
                                        <ol>
                                            @foreach($categories as $category)
                                                <li><a href="{{ route('shop.category', $category->slug) }}">{{ $category->name }}</a> </li>
                                            @endforeach
                                            {{-- <li><a href="#">Kids Dresses</a> (20) </li>
                                            <li><a href="#">Unisex Clothing</a> (25) </li>
                                            <li><a href="#">Winter Wear</a> (8) </li>
                                            <li><a href="#">Garments</a> (5) </li>
                                            <li><a href="#">Undergarments</a> (2) </li> --}}
                                        </ol>
                                    </dd>

                                    <dt class="odd">Size</dt>
                                    <div class="size-area">
                                        <div class="size">
                                            <ul>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <dt class="odd">Color</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li><a href="#">Green</a> (1) </li>
                                            <li><a href="#">White</a> (5) </li>
                                            <li><a href="#">Black</a> (5) </li>
                                            <li><a href="#">Gray</a> (4) </li>
                                            <li><a href="#">Dark Gray</a> (3) </li>
                                            <li><a href="#">Blue</a> (1) </li>
                                        </ol>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="block block-cart">
                            <div class="block-title ">My Cart</div>
                            <div class="block-content">
                                <div class="summary">
                                    <p class="amount">There are <a href="shopping_cart.html">3 items</a> in your cart.
                                    </p>
                                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span
                                            class="price">$227.99</span> </p>
                                </div>
                                <div class="ajax-checkout">
                                    <button class="button button-checkout" title="Submit"
                                        type="submit"><span>Checkout</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="block block-compare">
                            <div class="block-title ">Compare Products (2)</div>
                            <div class="block-content">
                                <ol id="compare-items">
                                    <li class="item">
                                        <input type="hidden" value="2173" class="compare-item-id">
                                        <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a
                                            href="#" class="product-name"><i class="fa fa-angle-right"></i>Product
                                            Title Here</a>
                                    </li>
                                    <li class="item">
                                        <input type="hidden" value="2174" class="compare-item-id">
                                        <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a
                                            href="#" class="product-name"><i class="fa fa-angle-right"></i>Product
                                            Title Here</a>
                                    </li>
                                    <li class="item">
                                        <input type="hidden" value="2174" class="compare-item-id">
                                        <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a
                                            href="#" class="product-name"><i class="fa fa-angle-right"></i>Product
                                            Title Here</a>
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
                        <div class="custom-slider">
                            <div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#carousel-example-generic" data-slide-to="0">
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active"><img class="img-responsive" src="images/slide3.jpg"
                                                alt="slide3">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">Big sale</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a class="link" href="#">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="item"><img class="img-responsive" src="images/slide1.jpg"
                                                alt="slide1">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">Bag collection</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="item"><img class="img-responsive" src="images/slide2.jpg"
                                                alt="slide2">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">New special</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#" data-slide="prev"> <span
                                            class="sr-only">Previous</span></a> <a class="right carousel-control"
                                        href="#" data-slide="next"> <span class="sr-only">Next</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="block block-list block-viewed">
                            <div class="block-title"> Recently Viewed </div>
                            <div class="block-content">
                                <ol id="recently-viewed-items">
                                    <li class="item odd">
                                        <p class="product-name"><a href="#"><i
                                                    class="fa fa-angle-right"></i>Product Title Here</a></p>
                                    </li>
                                    <li class="item even">
                                        <p class="product-name"><a href="#"><i
                                                    class="fa fa-angle-right"></i>Product Title Here</a></p>
                                    </li>
                                    <li class="item last odd">
                                        <p class="product-name"><a href="#"><i
                                                    class="fa fa-angle-right"></i>Product Title Here</a></p>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="block block-tags">
                            <div class="block-title"> Popular Tags</div>
                            <div class="block-content">
                                <div class="tags-list"> <a href="#">Appo</a> <a href="#">Samsung</a> <a
                                        href="#">HTC</a> <a href="#">Nokia</a> <a href="#">Camera</a>
                                    <a href="#">Computers</a> <a href="#">Flashes</a> <a href="#">RAM
                                        Card</a><a href="#">Coolpad</a> <a href="#">Lenovo</a>
                                </div>
                                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->



@endsection
