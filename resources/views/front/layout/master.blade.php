<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="description"
        content="Fabulous is a creative, clean, fully responsive, powerful and multipurpose HTML Template with latest website trends. Perfect to all type of fashion stores.">
    <meta name="keywords" content="HTML,CSS,womens clothes,fashion,mens fashion,fashion show,fashion week">
    <meta name="author" content="JTV">
    <title>@yield('title') | Fabulous Shop</title>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/favicon.ico')}}">

    <!-- CSS Style -->
    @yield('css')
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
</head>

<body class="cms-index-index cms-home-page">

    <!-- mobile menu -->
    <div id="jtv-mobile-menu">
        <ul>
            <li>
                <div class="jtv-search-mob">
                    <form id="search1" name="search">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                            </div>
                            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term"
                                id="srch-term">
                        </div>
                    </form>
                </div>
            </li>
            <li><a href="index.html">Home</a>
                <ul>
                    <li><a href="../index.html"><span>Home Shop 1</span></a></li>
                    <li><a href="../version2/index.html"><span>Home Shop 2</span></a></li>
                    <li><a href="index.html"><span>Home Shop 3</span></a></li>
                    <li><a href="../version4/index.html"><span>Home Shop 4</span></a></li>
                </ul>
            </li>
            <li><a href="#">Pages</a>
                <ul>
                    <li><a href="shop_grid.html"><span>Shop Grid</span></a>
                        <ul>
                            <li><a href="shop_grid_right.html"> <span>Shop Grid Right Sidebar</span></a></li>
                            <li><a href="shop_grid_fullwidth.html"> <span>Shop Grid Fullwidth</span></a></li>
                        </ul>
                    </li>
                    <li><a href="shop_list.html"> <span>Shop List</span></a>
                        <ul>
                            <li><a href="shop_list_right.html"> <span>Shop List Right Sidebar</span></a></li>
                        </ul>
                    </li>
                    <li><a href="single_product.html"> <span>Single Product</span></a></li>
                    <li><a href="shopping_cart.html"> <span>Shopping Cart</span></a></li>
                    <li><a href="checkout.html"><span>Checkout</span></a></li>
                    <li><a href="wishlist.html"> <span>Wishlist</span></a></li>
                    <li><a href="compare.html"><span>Compare</span></a></li>
                    <li><a href="quick_view.html"><span>Quick View</span></a></li>
                    <li><a href="404error.html"><span>404 Error Page</span></a></li>
                </ul>
            </li>
            <li><a href="shop_grid.html">Fashion</a>
                <ul>
                    <li><a href="#" class="">Accessories</a>
                        <ul>
                            <li><a href="shop_grid.html">Cocktail</a></li>
                            <li><a href="shop_grid.html">Day</a></li>
                            <li><a href="shop_grid.html">Evening</a></li>
                            <li><a href="shop_grid.html">Sundresses</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Dresses</a>
                        <ul>
                            <li><a href="shop_grid.html">Accessories</a></li>
                            <li><a href="shop_grid.html">Hats and Gloves</a></li>
                            <li><a href="shop_grid.html">Lifestyle</a></li>
                            <li><a href="shop_grid.html">Bras</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shoes</a>
                        <ul>
                            <li><a href="shop_grid.html">Flat Shoes</a></li>
                            <li><a href="shop_grid.html">Flat Sandals</a></li>
                            <li><a href="shop_grid.html">Boots</a></li>
                            <li><a href="shop_grid.html">Heels</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Jwellery</a>
                        <ul>
                            <li><a href="shop_grid.html">Bracelets</a></li>
                            <li><a href="shop_grid.html">Necklaces &amp; Pendent</a></li>
                            <li><a href="shop_grid.html">Pendants</a></li>
                            <li><a href="shop_grid.html">Pins &amp; Brooches</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Dresses</a>
                        <ul>
                            <li><a href="shop_grid.html">Casual Dresses</a></li>
                            <li><a href="shop_grid.html">Evening</a></li>
                            <li><a href="shop_grid.html">Designer</a></li>
                            <li><a href="shop_grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Swimwear</a>
                        <ul>
                            <li><a href="shop_grid.html">Swimsuits</a></li>
                            <li><a href="shop_grid.html">Beach Clothing</a></li>
                            <li><a href="shop_grid.html">Clothing</a></li>
                            <li><a href="shop_grid.html">Bikinis</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="shop_grid.html">Women</a>
                <ul>
                    <li><a href="#" class="">Clothing</a>
                        <ul class="level1">
                            <li><a href="shop_grid.html">Coats &amp; Jackets</a></li>
                            <li><a href="shop_grid.html">Raincoats</a></li>
                            <li><a href="shop_grid.html">Blazers</a></li>
                            <li><a href="shop_grid.html">Jackets</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Dresses</a>
                        <ul class="level1">
                            <li><a href="shop_grid.html">Casual Dresses</a></li>
                            <li><a href="shop_grid.html">Evening</a></li>
                            <li><a href="shop_grid.html">Designer</a></li>
                            <li><a href="shop_grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="">Shoes</a>
                        <ul class="level1">
                            <li><a href="shop_grid.html">Sport Shoes</a></li>
                            <li><a href="shop_grid.html">Casual Shoes</a></li>
                            <li><a href="shop_grid.html">Leather Shoes</a></li>
                            <li><a href="shop_grid.html">canvas shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Jackets</a>
                        <ul class="level1">
                            <li><a href="shop_grid.html">Coats</a></li>
                            <li><a href="shop_grid.html">Formal Jackets</a></li>
                            <li><a href="shop_grid.html">Leather Jackets</a></li>
                            <li><a href="shop_grid.html">Blazers</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Accesories</a>
                        <ul class="level1">
                            <li><a href="shop_grid.html">Backpacks</a></li>
                            <li><a href="shop_grid.html">Wallets</a></li>
                            <li><a href="shop_grid.html">Laptops Bags</a></li>
                            <li><a href="shop_grid.html">Belts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="shop_grid.html">Men</a>
                <ul>
                    <li><a href="shop_grid.html">Mobiles</a>
                        <ul>
                            <li><a href="shop_grid.html">iPhone</a></li>
                            <li><a href="shop_grid.html">Samsung</a></li>
                            <li><a href="shop_grid.html">Nokia</a></li>
                            <li><a href="shop_grid.html">Sony</a></li>
                        </ul>
                    </li>
                    <li><a href="shop_grid.html" class="">Music &amp; Audio</a>
                        <ul>
                            <li><a href="shop_grid.html">Audio</a></li>
                            <li><a href="shop_grid.html">Cameras</a></li>
                            <li><a href="shop_grid.html">Appling</a></li>
                            <li><a href="shop_grid.html">Car Music</a></li>
                        </ul>
                    </li>
                    <li><a href="shop_grid.html">Accessories</a>
                        <ul>
                            <li><a href="shop_grid.html">Home &amp; Office</a></li>
                            <li><a href="shop_grid.html">TV &amp; Home Theater</a></li>
                            <li><a href="shop_grid.html">Phones &amp; Radio</a></li>
                            <li><a href="shop_grid.html">All Electronics</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="jtv-top-link-mob">
            <ul class="links">
                <li><a title="My Account" href="account_page.html">My Account</a></li>
                <li><a title="Wishlist" href="wishlist.html">Wishlist</a></li>
                <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                <li><a title="Blog" href="blog.html"><span>Blog</span></a></li>
                <li class="last"><a title="Login" href="account_page.html"><span>Login</span></a></li>
            </ul>
        </div>
    </div>
    <div id="page">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Header Language -->
                            <div class="col-xs-12 col-sm-4 col-md-6">
                                <div class="welcome-msg">Welcome to our store! </div>
                                <div class="dropdown jtv-language-box"> <a role="button" data-toggle="dropdown"
                                        data-target="#" class="block-language dropdown-toggle" href="#"> <img
                                            class="img-responsive" src="images/flag-english.jpg" alt="language">
                                        English <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="selected" href="#"> <img class="img-responsive"
                                                    src="images/flag-english.jpg" alt="flag">
                                                <span>English</span></a></li>
                                        <li><a href="#"> <img class="img-responsive"
                                                    src="images/flag-default.jpg" alt="flag">
                                                <span>French</span></a></li>
                                        <li><a href="#"> <img class="img-responsive"
                                                    src="images/flag-german.jpg" alt="flag">
                                                <span>German</span></a></li>
                                        <li><a href="#"> <img class="img-responsive"
                                                    src="images/flag-brazil.jpg" alt="flag">
                                                <span>Brazil</span></a></li>
                                        <li><a href="#"> <img class="img-responsive"
                                                    src="images/flag-chile.jpg" alt="flag">
                                                <span>Chile</span></a></li>
                                        <li><a href="#"> <img class="img-responsive"
                                                    src="images/flag-spain.jpg" alt="flag">
                                                <span>Spain</span></a></li>
                                    </ul>
                                </div>
                                <!-- End Header Language -->

                                <!-- Header Currency -->
                                <div class="dropdown jtv-currency-box"> <a role="button" data-toggle="dropdown"
                                        data-target="#" class="block-currency dropdown-toggle" href="#"> USD
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"> $ - Dollar </a></li>
                                        <li><a href="#"> £ - Pound </a></li>
                                        <li><a href="#"> € - Euro </a></li>
                                    </ul>
                                </div>
                                <!-- End Header Currency -->

                            </div>
                            <div class="col-xs-6 col-sm-8 col-md-6 hidden-xs">
                                <!-- Header Top Links -->
                                <div class="jtv-top-links">
                                    <div class="links">
                                        <ul>
                                            <li><a title="My Account" href="account_page.html"><span
                                                        class="hidden-xs">My Account</span></a>
                                            </li>
                                            <li><a title="Wishlist" href="wishlist.html">Wishlist</a></li>
                                            <li><a title="Checkout" href="checkout.html"><span
                                                        class="hidden-xs">Checkout</span></a></li>
                                            <li>
                                                <div class="dropdown block-company-wrapper hidden-xs"> <a
                                                        role="button" data-toggle="dropdown" data-target="#"
                                                        class="block-company dropdown-toggle" href="#"> More
                                                        <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="about_us.html"> About Us </a></li>
                                                        <li><a href="#"> Track Your Order </a></li>
                                                        <li><a href="#"> Privacy Policy </a></li>
                                                        <li><a href="sitemap.html">Site Map </a></li>
                                                        <li><a href="#">Search Terms </a></li>
                                                        <li><a href="#">Advanced Search </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="account_page.html"><span class="hidden-xs">Log In</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Header Top Links -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="jtv-top-cart-box">
                                <!-- Top Cart -->
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                        <a href="shopping_cart.html"> <i class="pe-7s-cart"></i><span
                                                class="cart_count hidden-xs">2</span><span class="price hidden-xs">My
                                                Cart / $299.00</span></a>
                                    </div>
                                    <div>
                                        <div class="jtv-top-cart-content">

                                            <!--block-subtitle-->
                                            <ul class="mini-products-list" id="cart-sidebar">
                                                <li class="item first">
                                                    <div class="item-inner"> <a class="product-image"
                                                            title="Product Title Here" href="#"><img
                                                                class="img-responsive" alt="Product Title Here"
                                                                src="../images/products/product-fashion-1.jpg"> </a>
                                                        <div class="product-details">
                                                            <div class="access"><a class="jtv-btn-remove"
                                                                    title="Remove This Item" href="#">Remove</a>
                                                                <a class="btn-edit" title="Edit item"
                                                                    href="#"><i class="icon-pencil"></i><span
                                                                        class="hidden">Edit item</span></a>
                                                            </div>
                                                            <p class="product-name"><a href="#">Product Title
                                                                    Here</a> </p>
                                                            <strong>1</strong> x <span class="price">$79.99</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="item-inner"> <a class="product-image"
                                                            title="Product Title Here" href="single_product.html"><img
                                                                class="img-responsive" alt="Product Title Here"
                                                                src="../images/products/product-fashion-1.jpg"> </a>
                                                        <div class="product-details">
                                                            <div class="access"><a class="jtv-btn-remove"
                                                                    title="Remove This Item" href="#">Remove</a>
                                                                <a class="btn-edit" title="Edit item"
                                                                    href="#"><i class="icon-pencil"></i><span
                                                                        class="hidden">Edit item</span></a>
                                                            </div>
                                                            <p class="product-name"><a href="#">Product Title
                                                                    Here</a> </p>
                                                            <strong>1</strong> x <span class="price">$88.89</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item last">
                                                    <div class="item-inner"> <a class="product-image"
                                                            title="Product Title Here" href="single_product.html"><img
                                                                class="img-responsive" alt="Product Title Here"
                                                                src="../images/products/product-fashion-1.jpg"> </a>
                                                        <div class="product-details">
                                                            <div class="access"><a class="jtv-btn-remove"
                                                                    title="Remove This Item" href="#">Remove</a>
                                                                <a class="btn-edit" title="Edit item"
                                                                    href="#"><i class="icon-pencil"></i><span
                                                                        class="hidden">Edit item</span></a>
                                                            </div>
                                                            <p class="product-name"><a href="#">Product Title
                                                                    Here</a> </p>
                                                            <strong>1</strong> x <span class="price">$85.99</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <!--actions-->
                                            <div class="actions">
                                                <button class="btn-checkout" title="Checkout" type="button"
                                                    onClick="checkout.html"><span>Checkout</span> </button>
                                                <a href="shopping_cart.html" class="view-cart"><span>View
                                                        Cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 jtv-logo-box">
                            <div class="mm-toggle-wrap hidden-sm hidden-md hidden-lg">
                                <div class="mm-toggle"><i class="fa fa-align-justify"></i></div>
                            </div>
                            <!-- Header Logo -->
                            <div class="logo"> <a title="eCommerce" href="index.html"><img class="img-responsive"
                                        alt="eCommerce" src="images/logo.png"> </a> </div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                            <div class="search-box">
                                <form action="cat" method="POST" id="search_mini_form" name="Categories">
                                    <input type="text" placeholder="Search for products..." maxlength="70"
                                        name="search" id="search">
                                    <button type="button" class="search-btn-bg"><i
                                            class="pe-7s-search"></i>&nbsp;</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- Navigation -->

        <nav class="hidden-xs">
            <div class="container">
                <div class="nav-inner">

                    <!-- BEGIN NAV -->
                    <ul id="nav">
                        <li class="drop-menu"><a href="index.html" class="level-top active"><span>Home</span></a>
                            <ul>
                                <li><a href="../index.html"><span>Home Shop 1</span></a></li>
                                <li><a href="../version2/index.html"><span>Home Shop 2</span></a></li>
                                <li><a href="index.html"><span>Home Shop 3</span></a></li>
                                <li><a href="../version4/index.html"><span>Home Shop 4</span></a></li>
                            </ul>
                        </li>
                        <li class="drop-menu"> <a href="#"> <span>Pages</span></a>
                            <ul>
                                <li class="sub-cat"><a href="shop_grid.html"><span>Shop Grid</span></a>
                                    <ul>
                                        <li><a href="shop_grid_right.html"> <span>Shop Grid Right Sidebar</span></a>
                                        </li>
                                        <li><a href="shop_grid_fullwidth.html"> <span>Shop Grid Fullwidth</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-cat"> <a href="shop_list.html"> <span>Shop List</span></a>
                                    <ul>
                                        <li><a href="shop_list_right.html"> <span>Shop List Right Sidebar</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="single_product.html"> <span>Single Product</span></a></li>
                                <li><a href="shopping_cart.html"> <span>Shopping Cart</span></a></li>
                                <li><a href="checkout.html"><span>Checkout</span></a></li>
                                <li><a href="wishlist.html"> <span>Wishlist</span></a></li>
                                <li><a href="compare.html"><span>Compare</span></a></li>
                                <li><a href="quick_view.html"><span>Quick View</span></a></li>
                                <li><a href="404error.html"><span>404 Error Page</span></a></li>
                            </ul>
                        </li>
                        <li class="mega-menu"> <a class="level-top" href="shop_grid.html"><span>Clothing</span></a>
                            <div class="jtv-menu-block-wrapper">
                                <div class="jtv-menu-block-wrapper2">
                                    <div class="nav-block jtv-nav-block-center">
                                        <div class="col-1">
                                            <ul class="level0">
                                                <li class="parent item"> <a
                                                        href="shop_grid.html"><span>Women</span></a>
                                                    <ul class="level1">
                                                        <li><a href="shop_grid.html"><span>Blazers & Vests</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>Graphics Tees</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>Jeans</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Jackets &
                                                                    Outerwear</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Pants</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="parent item"> <a href="shop_grid.html"><span>Men</span></a>
                                                    <ul class="level1">
                                                        <li><a href="shop_grid.html"><span>Casual Dresses</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>Barware</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Accessories</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Grooming</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Lifestyle</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="parent item"> <a
                                                        href="shop_grid.html"><span>Kids</span></a>
                                                    <ul class="level1">
                                                        <li><a href="shop_grid.html"><span>Bath and Body</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>T-Shirts</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Winter wear</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Clothing Sets</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>Pants</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="parent item"> <a href="shop_grid.html"><span>Jewelry
                                                        </span></a>
                                                    <ul class="level1">
                                                        <li><a href="shop_grid.html"><span>Necklaces &
                                                                    Pendants</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Earrings</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Dimond Rings</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Bangles &
                                                                    Bracelets</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Jewellery Sets</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="parent item"> <a
                                                        href="shop_grid.html"><span>Shoes</span></a>
                                                    <ul class="level1">
                                                        <li><a href="shop_grid.html"><span>Sports Shoes</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Sneakers</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Casual Shoes</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Loafers &
                                                                    Mocassins</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Flip-Flops</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="parent item"> <a
                                                        href="shop_grid.html"><span>Accessories</span></a>
                                                    <ul class="level1">
                                                        <li><a href="shop_grid.html"><span>Bags and Purces</span></a>
                                                        </li>
                                                        <li><a href="shop_grid.html"><span>Belts</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Scarves</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Gloves</span></a></li>
                                                        <li><a href="shop_grid.html"><span>Hair Accessories</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-2">
                                            <div class="jtv-nav-image1"> <a title="" href="#"><img
                                                        class="img-responsive" alt="menu_image"
                                                        src="images/menu-img1.jpg"> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mega-menu"> <a class="level-top"
                                href="shop_grid.html"><span>Accessories</span></a>
                            <div class="jtv-menu-block-wrapper">
                                <div class="jtv-menu-block-wrapper2">
                                    <div class="nav-block jtv-nav-block-center">
                                        <ul class="level0">
                                            <li class="parent item"> <a href="shop_grid.html"><span>Handbags &
                                                        clutches</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Handbags</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Bags & backpacks</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Garment covers</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Bags & wallets combo</span></a>
                                                    </li>
                                                    <li><a href="shop_grid.html"><span>Wallets & clutches</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Watches</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Fastrack</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Casio</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Titan</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Fossil</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Sonata</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Belts</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Pacific gold</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Teakwood leathers</span></a>
                                                    </li>
                                                    <li><a href="shop_grid.html"><span>Lino perros</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Tommy hilfiger</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Leather</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a
                                                    href="shop_grid.html"><span>Sunglasses</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Prescription</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Nonprescription</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Basic facts</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Polarized</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Designer</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a
                                                    href="shop_grid.html"><span>Sportswear</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Tshirts</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Sweatshirts & Hoodies</span></a>
                                                    </li>
                                                    <li><a href="shop_grid.html"><span>Athletic Socks</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Track Jackets</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Track Pants &
                                                                Trousers</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Coats &
                                                        Jackets</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>American Blue</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Style Loft</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Sew in Style</span></a></li>
                                                    <li><a href="shop_grid.html"><span>The Wardrobe</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Sweetshirts</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="jtv-nav-banner">
                                        <div class="jtv-banner-box">
                                            <div class="jtv-nav-banner-img"> <a href="#"><img
                                                        class="img-responsive" src="images/menu-img2.jpg"
                                                        alt="Handbag"> </a> </div>
                                        </div>
                                        <div class="jtv-banner-box">
                                            <div class="jtv-nav-banner-img"> <a href="#"><img
                                                        class="img-responsive" src="images/menu-img3.jpg"
                                                        alt="Handbag"> </a> </div>
                                        </div>
                                        <div class="jtv-banner-box jtv-banner-box_last">
                                            <div class="jtv-nav-banner-img"> <a href="#"><img
                                                        class="img-responsive" src="images/menu-img4.jpg"
                                                        alt="Handbag"> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mega-menu"> <a class="level-top" href="shop_grid.html"><span>Women</span></a>
                            <div class="jtv-menu-block-wrapper">
                                <div class="jtv-menu-block-wrapper2">
                                    <div class="nav-block jtv-nav-block-center">
                                        <ul class="level0">
                                            <li class="parent item"> <a
                                                    href="shop_grid.html"><span>Clothing</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Hobo Bag</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Fabric Bag</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Backpack Bga</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Laptop Bga</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>New
                                                        arrivals</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Print Laptop Bag</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Office Bag</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Shoulder bags</span></a></li>
                                                    <li><a href="shop_grid.html"><span>leather totes</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Top
                                                        brands</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>leather totes</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Office Bag </span></a></li>
                                                    <li><a href="shop_grid.html"><span>Fabric Bag</span></a></li>
                                                    <li><a href="shop_grid.html"><span>WallyPhones</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a
                                                    href="shop_grid.html"><span>Professional</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Clutches bag</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Genuine bag </span></a></li>
                                                    <li><a href="shop_grid.html"><span>WallyPhones </span></a></li>
                                                    <li><a href="shop_grid.html"><span>Leather Phones</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Sports</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Vivo Mobiles</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Moto Z Play</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Moto G5 Plus</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Infocus Turbo 5</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Sony
                                                        Xperia</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Coolpad Mega 3</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Oppo F3 Plus</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Asus Zenfone</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Samsung On8</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mega-menu"> <a class="level-top" href="shop_grid.html"><span>Men</span></a>
                            <div class="jtv-menu-block-wrapper">
                                <div class="jtv-menu-block-wrapper2">
                                    <div class="nav-block jtv-nav-block-center jtv-menu-box-left">
                                        <ul class="level0">
                                            <li class="parent item"> <a
                                                    href="shop_grid.html"><span>Clothing</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>T-Shirts</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Shirts</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Trousers</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Sleep Wear</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Shoes</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Flat Shoes</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Flat Sandals</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Boots</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Heels</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a
                                                    href="shop_grid.html"><span>Jwellery</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Bracelets</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Necklaces &amp;
                                                                Pendent</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Pendants</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Pins &amp; Brooches</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent item"> <a href="shop_grid.html"><span>Watches</span></a>
                                                <ul class="level1">
                                                    <li><a href="shop_grid.html"><span>Fastrack</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Casio</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Sonata</span></a></li>
                                                    <li><a href="shop_grid.html"><span>Maxima</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="nav-block nav-block-right std jtv-menu-box-right"><img
                                            class="img-responsive" src="images/menu-img5.jpg" alt="menu img"> </div>
                                </div>
                            </div>
                        </li>
                        <li class="mega-menu"> <a class="level-top" href="blog.html"><span>Blog</span></a></li>
                        <li class="nav-custom-link mega-menu"> <a href="#" class="level-top">
                                <span>Features</span></a>
                            <div class="jtv-menu-block-wrapper custom-menu">
                                <div class="header-nav-dropdown-wrapper">
                                    <div class="jtv-custom-box"> <i class="fa fa-laptop"></i>
                                        <h4 class="heading">100% Responsive Design</h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium.
                                        </p>
                                    </div>
                                    <div class="jtv-custom-box"> <i class="fa fa-book"></i>
                                        <h4 class="heading">Easy Document</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat
                                            ut laoreet pharetra.
                                        </p>
                                    </div>
                                    <div class="jtv-custom-box"> <i class="fa fa-fort-awesome"></i>
                                        <h4 class="heading">Awesome Icon Fonts</h4>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                    <div class="jtv-custom-box"> <i class="fa fa-home"></i>
                                        <h4 class="heading">2 Layout Home Pages</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit. Lorem ipsum dolor
                                            sit amet,
                                            consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end nav -->

        {{-- Body --}}
        @yield('body')

        <!-- Footer -->
        <footer>
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12 col-md-3">
                            <div class="footer-links">
                                <h4>Useful links</h4>
                                <ul class="links">
                                    <li><a href="#" title="Product Recall">Product Recall</a></li>
                                    <li><a href="#" title="Gift Vouchers">Gift Vouchers</a></li>
                                    <li><a href="#" title="Returns &amp; Exchange">Returns &amp; Exchange</a>
                                    </li>
                                    <li><a href="#" title="Shipping Options">Shipping Options</a></li>
                                    <li><a href="#" title="Help &amp; FAQs">Help &amp; FAQs</a></li>
                                    <li><a href="#" title="Order history">Order history</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 col-md-3">
                            <div class="footer-links">
                                <h4>Service</h4>
                                <ul class="links">
                                    <li><a href="account_page.html">Account</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="shopping_cart.html">Shopping Cart</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Special</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 col-md-2">
                            <div class="footer-links">
                                <h4>Information</h4>
                                <ul class="links">
                                    <li><a href="sitemap.html">Sites Map </a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Trends</a></li>
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="contact_us.html">Contact Us</a></li>
                                    <li><a href="#">My Orders</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="footer-links">
                                <div class="footer-newsletter">
                                    <h4>Subscribe to our news</h4>
                                    <form id="newsletter-validate-detail" method="post" action="#">
                                        <div class="newsletter-inner">
                                            <p>Subscribe to be the first to know about Sales, Events, and Exclusive
                                                Offers!</p>
                                            <input class="newsletter-email" name='Email'
                                                placeholder='Enter Your Email' />
                                            <button class="button subscribe" type="submit"
                                                title="Subscribe">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="social">
                                    <ul class="inline-mode">
                                        <li class="social-network fb"><a title="Connect us on Facebook"
                                                href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-network googleplus"><a title="Connect us on Google+"
                                                href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="social-network tw"><a title="Connect us on Twitter"
                                                href="#"><i class="icon-social-twitter icons"></i></a></li>
                                        <li class="social-network linkedin"><a title="Connect us on Linkedin"
                                                href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="social-network rss"><a title="Connect us on rss" href="#"><i
                                                    class="fa fa-rss"></i></a>
                                        </li>
                                        <li class="social-network instagram"><a title="Connect us on Instagram"
                                                href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <address>
                            <p> <i class="pe-7s-map-marker"></i>Company, 12/34 - West 21st Street, New York, USA </p>
                            <p><i class="pe-7s-call"></i><span>+ (800) 0123 456 789</span> </p>
                            <p> <i class="pe-7s-mail-open"></i><span><a
                                        href="mailto:email@domain.com">support@example.com</a></span>
                            </p>
                        </address>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-6 col-xs-12 coppyright">Copyright © 2018 <a href="#">
                                Fabulous </a>. All Rights
                            Reserved. </div>
                        <div class="col-sm-5 col-md-6 col-xs-12 payment-accept">
                            <ul>
                                <li><a href="#"><img class="img-responsive" src="images/payment-1.png"
                                            alt="Payment Card"></a></li>
                                <li><a href="#"><img class="img-responsive" src="images/payment-2.png"
                                            alt="Payment Card"></a></li>
                                <li><a href="#"><img class="img-responsive" src="images/payment-3.png"
                                            alt="Payment Card"></a></li>
                                <li><a href="#"><img class="img-responsive" src="images/payment-4.png"
                                            alt="Payment Card"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- End Footer -->

    <!-- jquery js -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>

    <!-- bootstrap js -->
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>

    <!-- owl.carousel.min js -->
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>

    <!-- jtv-jtv-mobile-menu js -->
    <script src="{{ asset('front/js/jtv-mobile-menu.js') }}"></script>
    <script src="{{ asset('front/js/modernizr.custom.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('front/js/main.js') }}"></script>

    <!-- rev-slider js -->
    <script src="{{ asset('front/js/rev-slider.js') }}"></script>

    @yield('scripts')

    <script>
        jQuery(document).ready(function() {
            jQuery('#jtv-rev_slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 836,
                startheight: 530,
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,
                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',
                touchenabled: 'on',
                onHoverStop: 'on',
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                spinner: 'spinner0',
                keyboardNavigation: 'true',
                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',
                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: 'off',
                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>

    <!--Newsletter Popup Start-->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog newsletter-popup">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-body">
                    <h4 class="modal-title">Signup Newsletter</h4>
                    <form id="newsletter-form" method="post" action="#">
                        <div class="content-subscribe">
                            <div class="form-subscribe-header">
                                <label>Get <strong>25%</strong> off your First order. Join our newsletter to receive the
                                    latest updates and promotions</label>
                            </div>
                            <div class="input-box">
                                <input type="text" class="input-text newsletter-subscribe"
                                    title="Sign up for our newsletter" name="email"
                                    placeholder="Enter your email address">
                                <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    <ul class="social">
                        <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#."><i class="fa fa-google"></i></a></li>
                    </ul>
                    <div class="subscribe-bottom">
                        <input name="notshowpopup" id="notshowpopup" type="checkbox">
                        Don’t show this popup again
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Newsletter Popup-->

</body>

</html>
