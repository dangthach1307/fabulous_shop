<nav class="hidden-xs">
    <div class="container">
        <div class="nav-inner">

            <!-- BEGIN NAV -->
            <ul id="nav">
                <li class="{{(request()->segment(1)=='')?'active':''}}"><a href="{{route('home')}}"><span>Home</span></a></li>
                <li class="{{(request()->segment(1)=='shop')?'active':''}}"><a href="{{route('shop.index')}}"><span>Shop</span></a></li>
                {{-- <li><a href="../index.html"><span>Home Shop 1</span></a></li>
                <li><a href="../index.html"><span>Home Shop 1</span></a></li>
                <li class="drop-menu">
                    <a href="index.html" class="level-top active"><span>Home</span></a>
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
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
