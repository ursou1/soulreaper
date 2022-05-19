<header class="header-area header-default sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="header-logo-area">
                    <a href="/">
                        <img class="logo-main" src={{asset("assets/img/logo.png")}} alt="Logo" />
                        <img class="logo d-none" src={{asset("assets/img/logo-light.png")}} alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-7 d-none d-lg-block">
                <div class="header-navigation-area">
                    <ul class="main-menu nav position-relative">
                        <li class="has-submenu"><a href="#/">Home</a>
                            <ul class="submenu-nav">
                                <li><a href="index.html">Home Demo 1</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu full-width"><a href="#/">Shop</a>
                            <ul class="submenu-nav submenu-nav-mega">
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Shop Layouts</a>
                                    <ul>
                                        <li><a href="/">Shop List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Shop Pages</a>
                                    <ul>
                                        <li><a href="login.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item"><a href="#/" class="mega-title">WOMEN</a>
                                    <ul>
                                        <li><a href="single-product-name-1.html">Bags &amp; Purses</a></li>
                                        <li><a href="single-product-name-1.html">Beauty</a></li>
                                        <li><a href="single-product-name-1.html">Coats &amp; Jackets</a></li>
                                        <li><a href="single-product-name-1.html">Curve &amp; Plus Size</a></li>
                                        <li><a href="single-product-name-1.html">Denim</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#/">Products</a>
                            <ul class="submenu-nav">
                                <li><a href="single-product">Simple Product</a></li>
                            </ul>
                        </li>

                        <li><a href="">Contact</a></li>
                        <li><a href="about">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-7 col-lg-2 d-none d-sm-block text-end">
                <div class="header-action-area">
                    <ul class="header-action">
                        <li class="search-item">
                            <a class="action-item" href="page-search.html">
                                <i class="zmdi zmdi-search icon"></i>
                            </a>
                        </li>

                        <li class="mini-cart">
{{--                            <a class="action-item" href="{{ route('cart') }}">--}}
{{--                                <i class="zmdi zmdi-shopping-cart-plus icon"></i>--}}
{{--                                <span class="cart-quantity">2</span>--}}
{{--                            </a>--}}
{{--                            <div class="mini-cart-dropdown">--}}

{{--                                <div class="cart-total-money">--}}
{{--                                    <h5>Total: <span class="money">$159.00</span></h5>--}}
{{--                                </div>--}}
{{--                                <div class="cart-btn">--}}
{{--                                    <a href="cart">View Cart</a>--}}
{{--                                    <a href="checkout.html">Checkout</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                             <livewire:cart/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-sm-1 d-block d-lg-none text-end">
                <button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
            </div>
        </div>
    </div>
</header>
