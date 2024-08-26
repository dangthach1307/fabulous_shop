<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Language -->
                    <div class="col-xs-12 col-sm-4 col-md-6">
                        <div class="welcome-msg">Welcome to our store! </div>
                        <div class="dropdown jtv-language-box"> <a role="button" data-toggle="dropdown" data-target="#"
                                class="block-language dropdown-toggle" href="#"> <img class="img-responsive"
                                    src="images/flag-english.jpg" alt="language">
                                English <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="selected" href="#"> <img class="img-responsive"
                                            src="images/flag-english.jpg" alt="flag">
                                        <span>English</span></a></li>
                                <li><a href="#"> <img class="img-responsive" src="images/flag-default.jpg"
                                            alt="flag">
                                        <span>French</span></a></li>
                                <li><a href="#"> <img class="img-responsive" src="images/flag-german.jpg"
                                            alt="flag">
                                        <span>German</span></a></li>
                                <li><a href="#"> <img class="img-responsive" src="images/flag-brazil.jpg"
                                            alt="flag">
                                        <span>Brazil</span></a></li>
                                <li><a href="#"> <img class="img-responsive" src="images/flag-chile.jpg"
                                            alt="flag">
                                        <span>Chile</span></a></li>
                                <li><a href="#"> <img class="img-responsive" src="images/flag-spain.jpg"
                                            alt="flag">
                                        <span>Spain</span></a></li>
                            </ul>
                        </div>
                        <!-- End Header Language -->

                        <!-- Header Currency -->
                        <div class="dropdown jtv-currency-box"> <a role="button" data-toggle="dropdown" data-target="#"
                                class="block-currency dropdown-toggle" href="#"> USD
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


                                    {{-- <li><a title="Wishlist" href="wishlist.html">Wishlist</a></li>
                                    <li><a title="Checkout" href="checkout.html"><span
                                                class="hidden-xs">Checkout</span></a></li>
                                    <li>
                                        <div class="dropdown block-company-wrapper hidden-xs"> <a role="button"
                                                data-toggle="dropdown" data-target="#"
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
                                    </li> --}}
                                    @if (Auth::check())
                                        <li>
                                            <div class="dropdown block-company-wrapper hidden-xs">
                                                <a role="button" data-toggle="dropdown" data-target="#"
                                                    class="block-company dropdown-toggle" href="#"><i
                                                        class="fa fa-user"></i>
                                                    {{ Auth::user()->last_name . ' ' . Auth::user()->first_name }}
                                                    <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('account.my-order') }}"> History Orders</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="{{ route('account.logout') }}"> <span class="hidden-xs">
                                                    Logout</span></a></li>
                                    @else
                                        <li>
                                            <a href="{{ route('account.login') }}"><span class="hidden-xs">Log
                                                    In</span></a>
                                        </li>
                                    @endif
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
                                <a href="shopping_cart.html">
                                    <i class="pe-7s-cart"></i>
                                    <span class="cart_count hidden-xs">{{ Cart::count() }}</span>
                                    <span class="cart_price hidden-xs">My
                                        Cart / ${{ Cart::total() }}</span>
                                </a>
                            </div>
                            <div>
                                <div class="jtv-top-cart-content">

                                    <!--block-subtitle-->
                                    <ul class="mini-products-list" id="cart-sidebar">
                                        @foreach (Cart::content() as $cart)
                                            <li class="item" data-rowId="{{ $cart->rowId }}">
                                                <div class="item-inner">
                                                    <a class="product-image" title="{{ $cart->name }}" href="#">
                                                        <img class="img-responsive" alt="{{ $cart->name }}"
                                                            src="{{ asset('front/images/products/' . $cart->options->images[0]->path) }}">
                                                    </a>
                                                    <div class="product-details">
                                                        <div class="access">
                                                            <i class="jtv-btn-remove" title="Remove This Item"
                                                                onclick="removeCart('{{ $cart->rowId }}')"></i>
                                                            <a class="btn-edit" title="Edit item" href="#">
                                                                <i class="icon-pencil"></i>
                                                                <span class="hidden">Edit item</span>
                                                            </a>
                                                        </div>
                                                        <p class="product-name"><a
                                                                href="#">{{ $cart->name }}</a> </p>
                                                        <p><strong>{{ $cart->qty }}</strong> x <span
                                                                class="price">${{ $cart->price }}</span></p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <!--actions-->
                                    <div class="actions">
                                        <button class="btn-checkout" title="Checkout" type="button"
                                            onclick="window.location='{{ route('checkout.index') }}'"><span>Checkout</span>
                                        </button>
                                        <a href="{{ route('cart.index') }}" class="view-cart"><span>View
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
                    <div class="logo"> <a title="eCommerce" href="{{ route('home') }}"><img
                                class="img-responsive" alt="eCommerce" src="{{ asset('front/images/logo.png') }}">
                        </a> </div>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                    <div class="search-box">
                        <form action="shop" method="GET" id="search_mini_form" name="Categories">
                            <input type="text" placeholder="Search for products..." maxlength="70" name="search"
                                id="search" value="{{ request('search') }}">
                            <button type="button" class="search-btn-bg"><i class="pe-7s-search"></i>&nbsp;</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
