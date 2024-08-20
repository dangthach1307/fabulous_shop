@extends('front.layout.master')
@section('title', 'Home')

@section('body_class','cms-index-index cms-home-page')
@section('body')
    <!-- JTV Home Slider -->
    <div class="jtv-slideshow">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div id='jtv-rev_slider_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                        <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>
                            <ul>
                                <li data-transition='fade' data-slotamount='7' data-masterspeed='1000'
                                    data-thumb='{{ asset('front/images/slider/slide-img1.jpg') }}'><img
                                        class="img-responsive" src="{{ asset('front/images/slider/slide-img1.jpg') }}"
                                        alt="slide-img" data-bgposition='left top' data-bgfit='cover'
                                        data-bgrepeat='no-repeat' />
                                    <div class="info">
                                        <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1'
                                            style='z-index:2;white-space:nowrap; color:#fff; font-size:18px;'><span>Mega
                                                Sale, Don’t Miss
                                                Out !</span> </div>
                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'><span
                                                style="color:#000; letter-spacing:0.8px;">Look Hot</span> </div>
                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'><span
                                                style="color:#000; letter-spacing:0.8px;">with Style</span> </div>
                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                                            data-start='1450' data-easing='Power2.easeInOut' data-splitin='none'
                                            data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                            style='z-index:4;white-space:nowrap; color:#f8f8f8; margin-top:10px;'>Lorem
                                            ipsum dolor sit
                                            amet, consectetur.</div>
                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500'
                                            data-start='1500' data-easing='Linear.easeNone' data-splitin='none'
                                            data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                            style='z-index:4;white-space:nowrap; font-size:18px;'><a href='#'
                                                class="jtv-shop-now-btn">Shop Now</a> </div>
                                    </div>
                                </li>
                                <li data-transition='fade' data-slotamount='7' data-masterspeed='1000'
                                    data-thumb='{{ asset('front/images/slider/slide-img2.jpg') }}'><img
                                        class="img-responsive" src="{{ asset('front/images/slider/slide-img2.jpg') }}"
                                        alt="slide-img" data-bgposition='left top' data-bgfit='cover'
                                        data-bgrepeat='no-repeat' />
                                    <div class="info">
                                        <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1'
                                            style='z-index:2;white-space:nowrap;padding-right:0px; color:#333; font-size:18px;'>
                                            <span>Top
                                                Trend Of The Week!</span>
                                        </div>
                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1' style='z-index:3;white-space:nowrap; color:#f66;'>
                                            Young & Crazy</div>
                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1500' data-easing='Power2.easeInOut'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1'
                                            style='z-index:4;white-space:nowrap;color:#666; margin-top:12px;'>A Perfect
                                            template to start
                                            selling your products.</div>
                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500'
                                            data-start='1500' data-easing='Linear.easeNone' data-splitin='none'
                                            data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                            style='z-index:4;white-space:nowrap;'><a href='#'
                                                class="jtv-shop-now-btn">See Detail</a> </div>
                                    </div>
                                </li>
                                <li data-transition='fade' data-slotamount='7' data-masterspeed='1000'
                                    data-thumb='{{ asset('front/images/slider/slide-img3.jpg') }}'><img
                                        class="img-responsive" src="{{ asset('front/images/slider/slide-img3.jpg') }}"
                                        alt="slide-img" data-bgposition='left top' data-bgfit='cover'
                                        data-bgrepeat='no-repeat' />
                                    <div class="info">
                                        <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1'
                                            style='z-index:2;white-space:nowrap; color:#333; font-size:16px;'>
                                            <span>Stylish, Crazy. Are you
                                                a prominent girl?</span>
                                        </div>
                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'><span
                                                style="color:#06c;">Fresh</span> </div>
                                        <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'><span
                                                style="color:#000;">Summer Sales</span> </div>
                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500'
                                            data-speed='500' data-start='1450' data-easing='Power2.easeInOut'
                                            data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                            data-endelementdelay='0.1'
                                            style='z-index:4;white-space:nowrap; color:#333; margin-top:12px;'>End Season
                                            Up to 50% off.
                                        </div>
                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500'
                                            data-start='1500' data-easing='Linear.easeNone' data-splitin='none'
                                            data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                            style='z-index:4;white-space:nowrap; font-size:18px;'><a href='#'
                                                class="jtv-shop-now-btn">Shop Now</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end JTV Home Slider -->

                <div class="col-md-4 col-sm-12">
                    <div class="jtv-text-top-banner col-sm-6 col-md-12"> <a href="/#" title=""> <img
                                class="img-responsive" src="{{ asset('front/images/banner-img1.jpg') }}" alt="">
                            <span class="jtv-b-content bottom-left"><span class="text">LIMITED-TIME OFFER</span> <span
                                    class="title"> <span class="title-color">Jewellery
                                        Collection</span> </span> <span class="btn-buy"><span>Buy now</span></span> </span>
                            <span class="jtv-b-price-box"> <span class="banner-text-wrapper"> <span
                                        class="jtv-b-price-text">From</span>
                                    <span class="jtv-b-price">$299</span> </span> </span></a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- jtv bottom banner section -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="jtv-text-top-banner"> <a href="/#" title=""> <img class="img-responsive"
                            src="{{ asset('front/images/banner-img3.jpg') }}" alt=""> <span
                            class="jtv-b-content middle-left"> <span class="title">
                                <small>Handbags</small><br>
                                <span class="skincolor">Upto 75% Off</span></span><span class="btn-buy"><span>Shop
                                    now</span></span></span></a></div>
            </div>
            <div class="col-sm-6">
                <div class="jtv-text-top-banner"> <a href="/#" title=""> <img class="img-responsive"
                            src="{{ asset('front/images/banner-img4.jpg') }}" alt=""> <span
                            class="jtv-b-content middle-left"> <span class="banner-label-wrapper"></span> <span
                                class="title"> <small>Just Arrived</small><br>
                                <span class="title-color">Modern & Unique</span></span><span class="btn-buy"><span>Buy
                                    now</span></span></span></a></div>
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
                            <h2>Feature Products</h2>
                        </div>
                    </div>
                    <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid block-content">
                            @foreach ($featuredProducts as $product)
                                <div class="item">
                                    @include('front.components.product-item')
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bestsell Slider -->

    <!-- our features -->
    <div class="our-features-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="feature-box"> <i class="pe-7s-plane"></i>
                        <div class="content">
                            <h3>Free Shipping Worldwide</h3>
                            <p>Free Shipping on Orders over $99</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="feature-box"> <i class="pe-7s-piggy"></i>
                        <div class="content">
                            <h3>Money Back Guarantee</h3>
                            <p>To establish a selling price for a product</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="feature-box"> <i class="pe-7s-headphones"></i>
                        <div class="content">
                            <h3>Online Support 24/7</h3>
                            <p>In order to provide 24X7 customer support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Categories Slider -->
    <section class="top-categories-section">
        <div class="container">
            <div class="slider-items-products">
                <div class="top-block">
                    <div class="jtv-block-inner">
                        <div class="block-title">
                            <h2>Top Categories</h2>
                        </div>
                    </div>
                    <div id="top-cat-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid block-content">
                            <div class="jtv-top-categories"> <a href="#">
                                    <figure> <img src="../images/products/product-fashion-1.jpg" alt="Clothing">
                                        <figcaption>
                                            <h3>Clothing</h3>
                                            <span>22 Products</span>
                                        </figcaption>
                                    </figure>
                                </a> </div>
                            <div class="jtv-top-categories"> <a href="#">
                                    <figure> <img src="../images/products/product-fashion-1.jpg" alt="Shoes">
                                        <figcaption>
                                            <h3>Shoes</h3>
                                            <span>15 Products</span>
                                        </figcaption>
                                    </figure>
                                </a> </div>
                            <div class="jtv-top-categories"> <a href="#">
                                    <figure> <img src="../images/products/product-fashion-1.jpg" alt="Handbags">
                                        <figcaption>
                                            <h3>Handbags</h3>
                                            <span>10 Products</span>
                                        </figcaption>
                                    </figure>
                                </a> </div>
                            <div class="jtv-top-categories"> <a href="#">
                                    <figure> <img src="../images/products/product-fashion-1.jpg" alt="Jewelry">
                                        <figcaption>
                                            <h3>Jewelry</h3>
                                            <span>16 Products</span>
                                        </figcaption>
                                    </figure>
                                </a> </div>
                            <div class="jtv-top-categories"> <a href="#">
                                    <figure> <img src="../images/products/product-fashion-1.jpg" alt="Watches">
                                        <figcaption>
                                            <h3>Watches</h3>
                                            <span>25 Products</span>
                                        </figcaption>
                                    </figure>
                                </a> </div>
                            <div class="jtv-top-categories"> <a href="#">
                                    <figure> <img src="../images/products/product-fashion-1.jpg" alt="Sunglasses">
                                        <figcaption>
                                            <h3>Sunglasses</h3>
                                            <span>8 Products</span>
                                        </figcaption>
                                    </figure>
                                </a> </div>
                            <div class="jtv-top-categories"> <a href="#">
                                    <figure> <img src="../images/products/product-fashion-1.jpg" alt="Accessories">
                                        <figcaption>
                                            <h3>Accessories</h3>
                                            <span>30 Products</span>
                                        </figcaption>
                                    </figure>
                                </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top categories Slider -->

    <div class="content-page">
        <div class="container">
            <!-- Product Tabs-->
            <div class="category-product">
                <div class="navbar nav-menu">
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a data-toggle="tab" href="#tab-1">New Arrivals</a></li>
                            <li><a data-toggle="tab" href="#tab-2">On Sale</a></li>
                            <li><a data-toggle="tab" href="#tab-3">Best Rated</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <div class="tab-container">
                    <!-- tab product -->
                    <div class="tab-panel active" id="tab-1">
                        <div class="category-products">
                            <ul class="products-grid">
                                @foreach ($newArrivalProducts as $product)
                                    <li class="item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        @include('front.components.product-item')
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- tab product -->
                    <div class="tab-panel" id="tab-2">
                        <div class="category-products">
                            <ul class="products-grid">
                                @foreach ($onSaleProducts as $product)
                                    <li class="item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        @include('front.components.product-item')
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="tab-panel" id="tab-3">
                        <div class="category-products">
                            <ul class="products-grid">
                                @foreach ($topRatedProducts as $product)
                                    <li class="item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        @include('front.components.product-item')
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="jtv-text-top-banner"> <a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img6.jpg" alt=""> <span class="jtv-b-content top-center"> <span
                                class="title"><span class="black-text">Men's</span><br>
                                <small>New Arrivals</small></span> </span></a></div>
            </div>
            <div class="col-sm-4">
                <div class="jtv-text-top-banner"> <a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img7.jpg" alt=""> <span class="jtv-b-content middle-center"> <span
                                class="strong-title">25% OFF</span> </span> <span class="jtv-b-content bottom-center">
                            <span class="text-left"> <span class="media-body text-right"><span
                                        class="subtitle skincolor">Imagination<br>
                                        is a gift</span></span> </span> </span> <span class="jtv-b-price-box"> <span
                                class="banner-text-wrapper"> <span class="jtv-b-price-text">From</span> <span
                                    class="jtv-b-price">$129</span> </span> </span></a></div>
            </div>
            <div class="col-sm-4">
                <div class="jtv-text-top-banner"> <a href="/#" title=""> <img class="img-responsive"
                            src="images/banner-img8.jpg" alt=""> <span class="jtv-b-content top-center"> <span
                                class="title"><span class="black-text">Women's</span><br>
                                <small>What You Love</small></span> </span></a></div>
            </div>
        </div>
    </div>
    <!-- Latest Blog -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="blog-outer-container">
                    <div class="block-title">
                        <h2>Most Recent Blog</h2>
                    </div>
                    <div class="blog-inner">
                        @foreach($latestBlogs as $latestBlog)
                        <div class="col-sm-4 col-xs-12">
                            <div class="entry-thumb">
                                <a href="blog_single_post.html">
                                    <img class="img-responsive"
                                        alt="Blog" src="{{asset('front/images/blogs/'.$latestBlog->image)}}">
                                    </a>
                                </div>
                            <div class="blog-preview_info">
                                <h3><a href="blog_single_post.html">{{$latestBlog->title}}</a></h3>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">{{count($latestBlog->blogComments)}} comments</a></li>
                                    <li><i class="fa fa-calendar"></i>{{date('M d, Y',strtotime($latestBlog->created_at))}}</li>
                                </ul>
                                <div class="blog-preview_desc">I{{$latestBlog->subtitle}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Brand Logo -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="brand-logo">
                    <div class="slider-items-products">
                        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col6">
                                <div class="item"> <a href="#"><img class="img-responsive"
                                            src="images/brand1.png" alt="brand logo">
                                    </a> <a href="#"><img class="img-responsive" src="images/brand2.png"
                                            alt="brand logo"> </a> <a href="#"><img class="img-responsive"
                                            src="images/brand3.png" alt="brand logo"> </a> </div>
                                <div class="item"> <a href="#"><img class="img-responsive"
                                            src="images/brand4.png" alt="brand logo">
                                    </a> <a href="#"><img class="img-responsive" src="images/brand5.png"
                                            alt="brand logo"> </a> <a href="#"><img class="img-responsive"
                                            src="images/brand6.png" alt="brand logo"> </a></div>
                                <div class="item"> <a href="#"><img class="img-responsive"
                                            src="images/brand7.png" alt="brand logo">
                                    </a> <a href="#"><img class="img-responsive" src="images/brand8.png"
                                            alt="brand logo"> </a> <a href="#"><img class="img-responsive"
                                            src="images/brand9.png" alt="brand logo"> </a></div>
                                <div class="item"> <a href="#"><img class="img-responsive"
                                            src="images/brand10.png" alt="brand logo">
                                    </a> <a href="#"><img class="img-responsive" src="images/brand11.png"
                                            alt="brand logo"> </a> <a href="#"><img class="img-responsive"
                                            src="images/brand12.png" alt="brand logo"> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="jtv-testimonial-block">
                    <div class="slider-items-products">
                        <div id="testimonial-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col6">

                                <!-- Quote 1 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco
                                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    in reprehenderit in
                                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. quis
                                                    nostrud exercitation
                                                    ullamco laboris nisi ut aliquip quis nostrud exercitation!</p>
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
                                                <p>Aliquam convallis vulputate augue.Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                    Nam a dolor dictum, dapibus libero eu, malesuada nulla. Aliquam
                                                    convallis vulputate
                                                    augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a
                                                    dolor dictum, dapibus
                                                    libero eu, malesuada nulla. Aliquam convallis vulputate augue.Lorem
                                                    ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Nam a dolor dictum. </p>
                                                <div class="holder-info"><strong class="name">John Doe</strong>
                                                    <strong class="designation">CEO, ABC Softwear</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Integer scelerisque diam vitae aliquam fringilla. In vitae eros ac libero
                                                    mattis molestie
                                                    nec in magna. Aliquam sollicitudin urna nec felis blandit sodales. In
                                                    adipiscing leo magna,
                                                    a vehicula mi convallis ac. Vivamus volutpat, ante nec congue dictum,
                                                    ipsum odio consequat
                                                    justo, consectetur dignissim enim sapien ut nulla. Nunc massa ligula,
                                                    fermentum sed nisl
                                                    sed, lacinia vestibulum mi. Fusce et pharetra metus.</p>
                                                <div class="holder-info"> <strong class="name">John Doe</strong>
                                                    <strong class="designation">Managing Director</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recently Viewed Products Slider -->
    <section class="recently-products-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="jtv-block-inner">
                        <div class="block-title">
                            <h2>Recently Viewed Products</h2>
                        </div>
                    </div>
                    <div class="recently-products">
                        <div class="slider-items-products">
                            <div id="recently-viewed-products" class="product-flexslider">
                                <div class="slider-items">
                                    <div class="recently-viewed-box">
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"> <span class="cat-list">Women</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$89.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Men</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <p class="special-price"> <span
                                                                            class="price-label">Special Price</span> <span
                                                                            class="price"> $79.00 </span> </p>
                                                                    <p class="old-price"> <span
                                                                            class="price-label">Regular Price:</span>
                                                                        <span class="price"> $99.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Clothing</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$75.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"> <span class="cat-list">Jewellery</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$69.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Kids</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$39.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Handbags</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$155.00</span> </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Beauty</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <p class="special-price"> <span
                                                                            class="price-label">Special Price</span> <span
                                                                            class="price"> $69.00 </span> </p>
                                                                    <p class="old-price"> <span
                                                                            class="price-label">Regular Price:</span>
                                                                        <span class="price"> $89.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Footwear</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$59.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recently-viewed-box">
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"> <span class="cat-list">Women</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$89.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Men</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <p class="special-price"> <span
                                                                            class="price-label">Special Price</span> <span
                                                                            class="price"> $79.00 </span> </p>
                                                                    <p class="old-price"> <span
                                                                            class="price-label">Regular Price:</span>
                                                                        <span class="price"> $99.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Clothing</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$75.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"> <span class="cat-list">Women</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$69.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Kids</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$39.00</span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Fashion</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$155.00</span> </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Beauty</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <p class="special-price"> <span
                                                                            class="price-label">Special Price</span> <span
                                                                            class="price"> $69.00 </span> </p>
                                                                    <p class="old-price"> <span
                                                                            class="price-label">Regular Price:</span>
                                                                        <span class="price"> $89.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image"
                                                        title="Product Title Here" href="single_product.html"> <img
                                                            alt="Product Title Here"
                                                            src="../images/products/product-fashion-1.jpg"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner"><span class="cat-list">Footwear</span>
                                                        <div class="item-title"> <a title="Product Title Here"
                                                                href="single_product.html">Product
                                                                Title Here</a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i> <i
                                                                    class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price">
                                                                        <span class="price">$59.00</span>
                                                                    </span> </div>
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
            </div>
        </div>
    </section>
    <!-- End Recently Viewed Products Slider -->
@endsection
