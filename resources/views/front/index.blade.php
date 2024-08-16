@extends('front.layout.master')
@section('title', 'Home')

@section('body')
    <!-- Slideshow  -->
    <div class="main-slider" id="home">
        <div class="jtv-slideshow">
            <div id="jtv-slideshow">
                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                    <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                        <ul>
                            <li data-transition='slideup' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img
                                    src='images/slider/slide-img1.jpg' data-bgposition='left top' data-bgfit='cover'
                                    data-bgrepeat='no-repeat' alt="banner" />
                                <div class="caption-inner left">
                                    <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50' data-y='200'
                                        data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                        data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Say hello to the
                                        future.</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50' data-y='250'
                                        data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                        data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Smart Phone</div>
                                    <div class='tp-caption' data-x='72' data-y='320' data-endspeed='500'
                                        data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none'
                                        data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:2; white-space:nowrap;'>New
                                        collection Coming to town.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-x='72' data-y='370'
                                        data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                        data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#'
                                            class="buy-btn">READ MORE </a> </div>
                                </div>
                            </li>
                            <li data-transition='slideup' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img
                                    src='images/slider/slide-img2.jpg' data-bgposition='left top' data-bgfit='cover'
                                    data-bgrepeat='no-repeat' alt="banner" />
                                <div class="caption-inner">
                                    <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='360' data-y='170'
                                        data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                        data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Exclusive Offer
                                        -20% Off This Week
                                    </div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='290' data-y='240'
                                        data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                        data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Powerful &
                                        Responsive</div>
                                    <div class='tp-caption' data-x='415' data-y='315' data-endspeed='500'
                                        data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                        data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#273f5b;'>
                                        The secret to getting
                                        ahead is getting started.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-x='550' data-y='380'
                                        data-endspeed='500' data-speed='500' data-start='1500'
                                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                        data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Get
                                            Started</a> </div>
                                </div>
                            </li>
                            <li data-transition='slideup' data-slotamount='7' data-masterspeed='1000' data-thumb=''>
                                <img src='images/slider/slide-img3.jpg' data-bgposition='left top' data-bgfit='cover'
                                    data-bgrepeat='no-repeat' alt="banner" />
                                <div class="caption-inner right">
                                    <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='450' data-y='170'
                                        data-endspeed='500' data-speed='500' data-start='1300'
                                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                        data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='450'
                                        data-y='210' data-endspeed='500' data-speed='500' data-start='1100'
                                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                        data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:2; white-space:nowrap;'>More Personal.</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='450'
                                        data-y='270' data-endspeed='500' data-speed='500' data-start='1100'
                                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                        data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:2; white-space:nowrap;'>More Powerful.</div>
                                    <div class='tp-caption' data-x='475' data-y='340' data-endspeed='500'
                                        data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                        data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Fabulous
                                        is a modern, flexible and responsive HTML Template.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-x='475' data-y='390'
                                        data-endspeed='500' data-speed='500' data-start='1500'
                                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                        data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start
                                            Buying </a> </div>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="jtv-text-top-banner"><a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img3.jpg" alt=""> <span class="jtv-b-content middle-left">
                            <span class="title"><span class="skincolor">Incredible Audio</span><br>
                                <small>The Essence of Sound</small></span><span class="btn-buy"><span>Shop
                                    now</span></span></span></a></div>
            </div>
            <div class="col-sm-6">
                <div class="jtv-text-top-banner"><a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img4.jpg" alt=""> <span class="jtv-b-content middle-left">
                            <span class="banner-label-wrapper"></span> <span class="title"><span
                                    class="title-color">iMac Refresh Arriving</span><br>
                                <small>A touch of genius</small></span><span class="btn-buy"><span>Buy
                                    now</span></span></span></a></div>
            </div>
        </div>
    </div>
    <div class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <!-- Product Tabs-->
                    <div class="category-product">
                        <div class="navbar nav-menu">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">New Arrivals</a></li>
                                    <li><a data-toggle="tab" href="#tab-2">Best Seller</a></li>
                                    <li><a data-toggle="tab" href="#tab-3">Latest Products</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->

                        </div>
                        <div class="tab-container">
                            <!-- tab product -->
                            <div class="tab-panel active" id="tab-1">
                                <div class="category-products">
                                    <ul class="products-grid">
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html">
                                                            <img class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$155.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html">
                                                            <img class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$225.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html">
                                                            <img class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$99.00</span> </span>
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
                            <!-- tab product -->
                            <div class="tab-panel" id="tab-2">
                                <div class="category-products">
                                    <ul class="products-grid">
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html">
                                                            <img class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$155.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html">
                                                            <img class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$225.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html">
                                                            <img class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$99.00</span> </span>
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
                            <div class="tab-panel" id="tab-3">
                                <div class="category-products">
                                    <ul class="products-grid">
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html"> <img
                                                                class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here
                                                            </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$225.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html"> <img
                                                                class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here
                                                            </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span
                                                                            class="price">$99.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image"
                                                            title="Product Title Here" href="single_product.html"> <img
                                                                class="img-responsive" alt="Product Title Here"
                                                                src="images/products/img01.jpg"> </a>
                                                        <div class="new-label new-top-left">new</div>
                                                        <div class="action"><a href="compare.html" title="Compare"><i
                                                                    class="fa fa-signal"></i></a><a href="quick_view.html"
                                                                title="Quick view"><i class="fa fa-search"></i></a><a
                                                                href="wishlist.html" title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a><a
                                                                href="shopping_cart.html" title="Add to cart"><i
                                                                    class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here"
                                                                href="single_product.html"> Product Title Here
                                                            </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <p class="special-price"> <span
                                                                            class="price-label">Special
                                                                            Price</span> <span class="price">
                                                                            $156.00 </span> </p>
                                                                    <p class="old-price"> <span
                                                                            class="price-label">Regular
                                                                            Price:</span> <span class="price">
                                                                            $167.00 </span> </p>
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
                </div>
                <div class="col-md-4 col-sm-12 jtv-features-top"> <!-- our features -->
                    <div class="our-features-box ">
                        <div class="feature-box bg-green"> <i class="pe-7s-piggy"></i>
                            <div class="content">
                                <h3>Reasonable Pricing</h3>
                                <p>To establish a selling price for a product</p>
                            </div>
                        </div>
                        <div class="feature-box bg-pamaranch"> <i class="pe-7s-timer"></i>
                            <div class="content">
                                <h3>Limited Time Offers</h3>
                                <p>Hurry up! You Don't want to miss This!</p>
                            </div>
                        </div>
                        <div class="feature-box bg-red"> <i class="pe-7s-headphones"></i>
                            <div class="content">
                                <h3>24/7 Client Support</h3>
                                <p>In order to provide 24X7 customer support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jtv bottom banner section -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="jtv-text-top-banner"><a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img6.jpg" alt=""> <span class="jtv-b-content top-left"> <span
                                class="banner-label-wrapper"> <span class="banner-label small pink-bg">25%<br>
                                    <em>off</em></span> </span> </span> <span class="jtv-b-content bottom-left">
                            <span class="text">Only in our store</span> <span class="title"><span
                                    class="black-text">Special Offer</span><br>
                                <small>Exclusive Savings</small></span> </span></a></div>
            </div>
            <div class="col-sm-4">
                <div class="jtv-text-top-banner"><a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img8.jpg" alt=""> <span class="jtv-b-content top-center"> <span
                                class="title"><span class="black-text">Smart Camera</span><br>
                                <small>Superior Image Quality</small></span> </span></a></div>
            </div>
            <div class="col-sm-4">
                <div class="jtv-text-top-banner"><a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img7.jpg" alt=""> <span class="jtv-b-content middle-center"> <span
                                class="strong-title">45% OFF</span>
                        </span> <span class="jtv-b-content bottom-center"> <span class="text-left"> <span
                                    class="media-body text-right"><span class="subtitle skincolor">Best<br>
                                        Headphones</span></span> </span> </span> <span class="jtv-b-price-box">
                            <span class="banner-text-wrapper"> <span class="jtv-b-price-text">From</span> <span
                                    class="jtv-b-price">$29</span> </span> </span></a></div>
            </div>
        </div>
    </div>

    <!-- bestsell Slider -->
    <section class="jtv-bestsell-section">
        <div class="container">
            <div class="slider-items-products">
                <div class="bestsell-block">
                    <div class="jtv-block-inner">
                        <div class="block-title">
                            <h2>Featured Product</h2>
                        </div>
                    </div>
                    <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid block-content">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a class="product-image" title="Product Title Here"
                                                href="single_product.html"> <img class="img-responsive"
                                                    alt="Product Title Here" src="images/products/img01.jpg"> </a>
                                            <div class="action"><a href="compare.html" title="Compare"><i
                                                        class="fa fa-signal"></i></a><a href="quick_view.html"
                                                    title="Quick view"><i class="fa fa-search"></i></a><a
                                                    href="wishlist.html" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a><a href="shopping_cart.html"
                                                    title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$225.00</span> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a class="product-image" title="Product Title Here"
                                                href="single_product.html"> <img class="img-responsive"
                                                    alt="Product Title Here" src="images/products/img01.jpg"> </a>
                                            <div class="action"><a href="compare.html" title="Compare"><i
                                                        class="fa fa-signal"></i></a><a href="quick_view.html"
                                                    title="Quick view"><i class="fa fa-search"></i></a><a
                                                    href="wishlist.html" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a><a href="shopping_cart.html"
                                                    title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$99.00</span> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a class="product-image" title="Product Title Here"
                                                href="single_product.html"> <img class="img-responsive"
                                                    alt="Product Title Here" src="images/products/img01.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="action"><a href="compare.html" title="Compare"><i
                                                        class="fa fa-signal"></i></a><a href="quick_view.html"
                                                    title="Quick view"><i class="fa fa-search"></i></a><a
                                                    href="wishlist.html" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a><a href="shopping_cart.html"
                                                    title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special
                                                                Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular
                                                                Price:</span> <span class="price"> $167.00
                                                            </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a class="product-image" title="Product Title Here"
                                                href="single_product.html"> <img class="img-responsive"
                                                    alt="Product Title Here" src="images/products/img01.jpg"> </a>
                                            <div class="action"><a href="compare.html" title="Compare"><i
                                                        class="fa fa-signal"></i></a><a href="quick_view.html"
                                                    title="Quick view"><i class="fa fa-search"></i></a><a
                                                    href="wishlist.html" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a><a href="shopping_cart.html"
                                                    title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$225.00</span> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a class="product-image" title="Product Title Here"
                                                href="single_product.html"> <img class="img-responsive"
                                                    alt="Product Title Here" src="images/products/img01.jpg"> </a>
                                            <div class="action"><a href="compare.html" title="Compare"><i
                                                        class="fa fa-signal"></i></a><a href="quick_view.html"
                                                    title="Quick view"><i class="fa fa-search"></i></a><a
                                                    href="wishlist.html" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a><a href="shopping_cart.html"
                                                    title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$99.00</span> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a class="product-image" title="Product Title Here"
                                                href="single_product.html"> <img class="img-responsive"
                                                    alt="Product Title Here" src="images/products/img01.jpg"> </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="action"><a href="compare.html" title="Compare"><i
                                                        class="fa fa-signal"></i></a><a href="quick_view.html"
                                                    title="Quick view"><i class="fa fa-search"></i></a><a
                                                    href="wishlist.html" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a><a href="shopping_cart.html"
                                                    title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here"
                                                    href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special
                                                                Price</span> <span class="price"> $156.00 </span> </p>
                                                        <p class="old-price"> <span class="price-label">Regular
                                                                Price:</span> <span class="price"> $167.00
                                                            </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bestsell Slider -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.2s">
                <div class="jtv-testimonial-block">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">

                            <!-- Quote 1 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur. quis nostrud exercitation!</p>
                                            <div class="holder-info"> <strong class="name">Vince Roy</strong>
                                                <strong class="designation">CEO, XYZ Softwear</strong>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Aliquam convallis vulputate augue.Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nam a dolor dictum, dapibus libero eu,
                                                malesuada nulla. Aliquam convallis vulputate augue.Lorem ipsum dolor
                                                sit amet, consectetur adipiscing elit. Nam a dolor dictum, dapibus
                                                libero eu, malesuada nulla. Aliquam convallis vulputate augue.Lorem
                                                ipsum dolor sit amet, consectetur adipiscing. </p>
                                            <div class="holder-info"><strong class="name">John Doe</strong>
                                                <strong class="designation">CEO, ABC Softwear</strong>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Integer scelerisque diam vitae aliquam fringilla. In vitae eros ac
                                                libero mattis molestie nec in magna. Aliquam sollicitudin urna nec
                                                felis blandit sodales. In adipiscing leo magna, a vehicula mi
                                                convallis ac. Vivamus volutpat, ante nec congue dictum, ipsum odio
                                                consequat justo, consectetur dignissim enim sapien ut nulla. Nunc
                                                massa ligula, fermentum sed nisl sed.</p>
                                            <div class="holder-info"> <strong class="name">John Doe</strong>
                                                <strong class="designation">Managing Director</strong>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0"><img class="img-responsive"
                                    src="images/testimonials-img1.jpg" alt=""> </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive"
                                    src="images/testimonials-img2.jpg" alt=""> </li>
                            <li data-target="#quote-carousel" data-slide-to="2" class="active"><img
                                    class="img-responsive" src="images/testimonials-img3.jpg" alt="">
                            </li>
                        </ol>
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                class="fa fa-chevron-left"></i></a><a data-slide="next" href="#quote-carousel"
                            class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Brand Logo -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-logo">
                    <div class="slider-items-products">
                        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col6">

                                <!-- Item -->
                                <div class="item"><a href="#"><img class="img-responsive"
                                            src="images/brand1.png" alt="Image"> </a><a href="#"><img
                                            class="img-responsive" src="images/brand2.png" alt="Image">
                                    </a><a href="#"><img class="img-responsive" src="images/brand11.png"
                                            alt="Image"> </a></div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item"><a href="#"><img class="img-responsive"
                                            src="images/brand3.png" alt="Image"> </a><a href="#"><img
                                            class="img-responsive" src="images/brand4.png" alt="Image">
                                    </a><a href="#"><img class="img-responsive" src="images/brand10.png"
                                            alt="Image"> </a> </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item"><a href="#"><img class="img-responsive"
                                            src="images/brand5.png" alt="Image"> </a><a href="#"><img
                                            class="img-responsive" src="images/brand4.png" alt="Image">
                                    </a><a href="#"><img class="img-responsive" src="images/brand9.png"
                                            alt="Image"> </a> </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item"><a href="#"><img class="img-responsive"
                                            src="images/brand7.png" alt="Image"></a><a href="#"><img
                                            class="img-responsive" src="images/brand8.png" alt="Image">
                                    </a><a href="#"><img class="img-responsive" src="images/brand1.png"
                                            alt="Image"> </a> </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item"><a href="#"><img class="img-responsive"
                                            src="images/brand9.png" alt="Image"></a><a href="#"><img
                                            class="img-responsive" src="images/brand10.png" alt="Image">
                                    </a><a href="#"><img class="img-responsive" src="images/brand2.png"
                                            alt="Image"> </a> </div>
                                <!-- End Item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Blog -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-outer-container">
                    <div class="jtv-title">
                        <h2>Latest Blog</h2>
                    </div>
                    <div class="blog-inner">
                        <div class="col-sm-4 col-xs-12">
                            <div class="entry-thumb"><a href="blog_single_post.html"> <img class="img-responsive"
                                        alt="Blog" src="images/blog-img1.jpg"> </a>
                            </div>
                            <div class="blog-preview_info">
                                <h3><a href="blog_single_post.html">Winter Morning Fabulous</a></h3>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">12 comments</a></li>
                                    <li><i class="fa fa-calendar"></i>2017-02-25</li>
                                </ul>
                                <div class="blog-preview_desc">In adipiscing leo magna, a vehicula mi convallis
                                    ac. Vivamus volutpat, ante nec congue dictum.</div>
                                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="entry-thumb"><a href="blog_single_post.html"> <img class="img-responsive"
                                        alt="Blog" src="images/blog-img1.jpg"> </a>
                            </div>
                            <div class="blog-preview_info">
                                <h3><a href="blog_single_post.html">Perfect for promoting</a></h3>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">45 comments</a></li>
                                    <li><i class="fa fa-calendar"></i>2017-04-05</li>
                                </ul>
                                <div class="blog-preview_desc">Nam a dolor dictum, dapibus libero eu, malesuada
                                    nulla. Aliquam convallis vulputate augue.</div>
                                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="entry-thumb"><a href="blog_single_post.html"> <img class="img-responsive"
                                        alt="Blog" src="images/blog-img1.jpg"> </a>
                            </div>
                            <div class="blog-preview_info">
                                <h3><a href="blog_single_post.html">Winter Morning Fabulous</a></h3>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">12 comments</a></li>
                                    <li><i class="fa fa-calendar"></i>2017-02-25</li>
                                </ul>
                                <div class="blog-preview_desc">In adipiscing leo magna, a vehicula mi convallis
                                    ac. Vivamus volutpat, ante nec congue dictum.</div>
                                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Blog -->
@endsection
