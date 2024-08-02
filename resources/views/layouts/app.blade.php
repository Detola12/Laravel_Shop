<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version One || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{asset('assets/css/material-design-iconic-font.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-stars.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/helper.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Modernizr js -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<![endif]-->
<!-- Begin Body Wrapper -->
<div class="body-wrapper">
    <!-- Begin Header Area -->
    <header>
        <!-- Begin Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-right">
                            <ul class="ht-menu">

                                <!-- Currency Area End Here -->
                                <!-- Begin Language Area -->
                                @guest()
                                    <li>
                                        <a href="{{ route('login') }}" class="text-black text-[13px]">Login</a>
                                        <span class="px-2">|</span>
                                        <a href="{{ route('register') }}" class="text-black text-[13px]">Register</a>
                                    </li>
                            @endguest
                                @auth()
                                    <li>
                                        <a href="/" class="text-black text-[13px]">{{ auth()->user()->lastName }} {{ auth()->user()->firstName }}</a>
                                        <span class="px-2">|</span>
                                        <a href="{{ route('logout') }}" class="text-black text-[13px]">Logout</a>
                                    </li>
                                @endauth
                            <!-- Language Area End Here -->
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Top Area End Here -->
        <!-- Begin Header Middle Area -->
        <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Logo Area -->
                    <div class="col-lg-3">
                        <div class="logo pb-sm-30 pb-xs-30">
                            <a href="index.html">
                                <img src="{{asset('assets/images/menu/logo/1.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Header Logo Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                        <!-- Begin Header Middle Searchbox Area -->
                        <form action="#" class="hm-searchbox">
                            <select class="nice-select select-search-category">
                                <option value="0">All</option>
                                <option value="10">Laptops</option>
                                <option value="17">- -  Prime Video</option>
                                <option value="20">- - - -  All Videos</option>
                                <option value="21">- - - -  Blouses</option>
                                <option value="22">- - - -  Evening Dresses</option>
                                <option value="23">- - - -  Summer Dresses</option>
                                <option value="24">- - - -  T-shirts</option>
                                <option value="25">- - - -  Rent or Buy</option>
                                <option value="26">- - - -  Your Watchlist</option>
                                <option value="27">- - - -  Watch Anywhere</option>
                                <option value="28">- - - -  Getting Started</option>
                                <option value="18">- - - -  Computers</option>
                                <option value="29">- - - -  More to Explore</option>
                                <option value="30">- - - -  TV &amp; Video</option>
                                <option value="31">- - - -  Audio &amp; Theater</option>
                                <option value="32">- - - -  Camera, Photo </option>
                                <option value="33">- - - -  Cell Phones</option>
                                <option value="34">- - - -  Headphones</option>
                                <option value="35">- - - -  Video Games</option>
                                <option value="36">- - - -  Wireless Speakers</option>
                                <option value="19">- - - -  Electronics</option>
                                <option value="37">- - - -  Amazon Home</option>
                                <option value="38">- - - -  Kitchen &amp; Dining</option>
                                <option value="39">- - - -  Furniture</option>
                                <option value="40">- - - -  Bed &amp; Bath</option>
                                <option value="41">- - - -  Appliances</option>
                                <option value="11">TV &amp; Audio</option>
                                <option value="42">- -  Chamcham</option>
                                <option value="45">- - - -  Office</option>
                                <option value="47">- - - -  Gaming</option>
                                <option value="48">- - - -  Chromebook</option>
                                <option value="49">- - - -  Refurbished</option>
                                <option value="50">- - - -  Touchscreen</option>
                                <option value="51">- - - -  Ultrabooks</option>
                                <option value="52">- - - -  Blouses</option>
                                <option value="43">- -  Sanai</option>
                                <option value="53">- - - -  Hard Drives</option>
                                <option value="54">- - - -  Graphic Cards</option>
                                <option value="55">- - - -  Processors (CPU)</option>
                                <option value="56">- - - -  Memory</option>
                                <option value="57">- - - -  Motherboards</option>
                                <option value="58">- - - -  Fans &amp; Cooling</option>
                                <option value="59">- - - -  CD/DVD Drives</option>
                                <option value="44">- -  Meito</option>
                                <option value="60">- - - -  Sound Cards</option>
                                <option value="61">- - - -  Cases &amp; Towers</option>
                                <option value="62">- - - -  Casual Dresses</option>
                                <option value="63">- - - -  Evening Dresses</option>
                                <option value="64">- - - -  T-shirts</option>
                                <option value="65">- - - -  Tops</option>
                                <option value="12">Smartphone</option>
                                <option value="66">- -  Camera Accessories</option>
                                <option value="68">- - - -  Octa Core</option>
                                <option value="69">- - - -  Quad Core</option>
                                <option value="70">- - - -  Dual Core</option>
                                <option value="71">- - - -  7.0 Screen</option>
                                <option value="72">- - - -  9.0 Screen</option>
                                <option value="73">- - - -  Bags &amp; Cases</option>
                                <option value="67">- -  XailStation</option>
                                <option value="74">- - - -  Batteries</option>
                                <option value="75">- - - -  Microphones</option>
                                <option value="76">- - - -  Stabilizers</option>
                                <option value="77">- - - -  Video Tapes</option>
                                <option value="78">- - - -  Memory Card Readers</option>
                                <option value="79">- - - -  Tripods</option>
                                <option value="13">Cameras</option>
                                <option value="14">headphone</option>
                                <option value="15">Smartwatch</option>
                                <option value="16">Accessories</option>
                            </select>
                            <input type="text" placeholder="Enter your search key ...">
                            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- Header Middle Searchbox Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="header-middle-right">
                            <ul class="hm-menu">
                                <!-- Begin Header Middle Wishlist Area -->
                                <li class="hm-wishlist">
                                    <a href="wishlist.html">
                                        <span class="cart-item-count wishlist-item-count">0</span>
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </li>
                                <!-- Header Middle Wishlist Area End Here -->
                                <!-- Begin Header Mini Cart Area -->
                                <li class="hm-minicart">
                                    <div class="hm-minicart-trigger">
                                        <span class="item-icon"></span>
                                        <span class="item-text">£80.00
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                    </div>
                                    <span></span>
                                    <div class="minicart">
                                        <ul class="minicart-product-list">
                                            <li>
                                                <a href="single-product.html" class="minicart-product-image">
                                                    <img src="{{asset('assets/images/product/small-size/5.jpg')}}" alt="cart products">
                                                </a>
                                                <div class="minicart-product-details">
                                                    <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                    <span>£40 x 1</span>
                                                </div>
                                                <button class="close" title="Remove">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <a href="single-product.html" class="minicart-product-image">
                                                    <img src="{{asset('assets/images/product/small-size/6.jpg')}}" alt="cart products">
                                                </a>
                                                <div class="minicart-product-details">
                                                    <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                    <span>£40 x 1</span>
                                                </div>
                                                <button class="close" title="Remove">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </li>
                                        </ul>
                                        <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                        <div class="minicart-button">
                                            <a href="shopping-cart.html" class="li-button li-button-fullwidth li-button-dark">
                                                <span>View Full Cart</span>
                                            </a>
                                            <a href="checkout.html" class="li-button li-button-fullwidth">
                                                <span>Checkout</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Header Mini Cart Area End Here -->
                            </ul>
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Middle Area End Here -->
        <!-- Begin Header Bottom Area -->
        <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Header Bottom Menu Area -->
                        <div class="hb-menu">
                            <nav>
                                <ul>
                                    <li><a href="about-us.html">Home</a></li>
                                    <li><a href="contact.html">Shop</a></li>
                                    <li><a href="shop-left-sidebar.html">Cart</a></li>
                                    <li><a href="shop-left-sidebar.html">CheckOut</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Bottom Menu Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Area End Here -->
        <!-- Begin Mobile Menu Area -->
        <div class="mobile-menu-area d-lg-none d-xl-none col-12">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End Here -->
    </header>

    @yield('content')
</div>
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Ajax Mail js -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
<!-- Wow.min js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Slick Carousel js -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- Owl Carousel-2 js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- Imagesloaded js -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Mixitup js -->
<script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- Barrating -->
<script src="{{asset('assets/js/jquery.barrating.min.js')}}"></script>
<!-- Jquery-ui -->
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<!-- Venobox -->
<script src="{{asset('assets/js/venobox.min.js')}}"></script>
<!-- Nice Select js -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- ScrollUp js -->
<script src="{{asset('assets/js/scrollUp.min.js')}}"></script>
<!-- Main/Activator js -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

<!-- index30:23-->
</html>
