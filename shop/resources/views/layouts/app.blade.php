<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <title>Hello, world!</title>
</head>
<body>


<!-- Header strat -->
<header class="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <span>Phone: +01 256 25 235</span>
                    <span>email: info@eiser.com</span>
                </div>
                <div class="col text-right">
                    <span>gift card</span>
                    <span>track order</span>
                    <div class="lang d-inline-flex">
                        <span>language </span>
                        <ul class="lang-dropdown">
                            <li>Freance</li>
                            <li>Spanis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar">
            <!-- Site logo -->
            <a href="home-01.html" class="logo">
                <img src="images/logo.png" alt="">
            </a>
            <a href="javascript:void(0);" id="mobile-menu-toggler">
                <i class="ti-align-justify"></i>
            </a>
            <ul class="navbar-nav">
                <li class="current-menu-item has-menu-child">
                    <a href="{{url('products')}}">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="home-01.html">Category 01</a></li>
                        <li><a href="home-02.html">Category 02</a></li>
                        <li><a href="home-02.html">Category 03</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Termst & Conditions</a></li>
                <li><a href="#">Shoping Card</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <div class="d-inline-flex align-items-center">
                <a href="#" class="search-icon icon">
                    <!-- <img src="images/icons/search.png" alt=""> -->
                    <i class="ti-search"></i>
                </a>
                <a href="#" class="cart-bag icon">
                    <!-- <img src="images/icons/bag.png" alt=""> -->
                    <i class="ti-shopping-cart"></i>
                    <span class="itemCount">0</span>
                </a>
                <a href="#" class="wishlist icon">
                    <i class="ti-heart"></i>
                    <span class="itemCount">09</span>
                </a>
            </div>
        </nav>
    </div>
</header>
<!-- Header strat -->

@yield('content')

<!-- Footer strat -->
<footer class="footer">
    <div class="container foo-top">
        <div class="row">
            <div class="col-md-2 col-sm-6">
                <div class="widget widget-navigation">
                    <h4 class="widget-title">About us</h4>
                    <ul>
                        <li><a href="#">Who we are</a></li>
                        <li><a href="#">Work with us</a></li>
                        <li><a href="#">Become a supplier</a></li>
                        <li><a href="#">Investor relations</a></li>
                        <li><a href="#">Our devices</a></li>
                        <li><a href="#">Affiliate program</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 offset-md-1 col-sm-6">
                <div class="widget widget-navigation">
                    <h4 class="widget-title">Useful links</h4>
                    <ul>
                        <li><a href="#">Who we are</a></li>
                        <li><a href="#">Work with us</a></li>
                        <li><a href="#">Become a supplier</a></li>
                        <li><a href="#">Investor relations</a></li>
                        <li><a href="#">Our devices</a></li>
                        <li><a href="#">Affiliate program</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 offset-md-1 col-sm-6">
                <div class="widget widget-navigation">
                    <h4 class="widget-title">Online shopping</h4>
                    <ul>
                        <li><a href="#">Who we are</a></li>
                        <li><a href="#">Work with us</a></li>
                        <li><a href="#">Become a supplier</a></li>
                        <li><a href="#">Investor relations</a></li>
                        <li><a href="#">Our devices</a></li>
                        <li><a href="#">Affiliate program</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 offset-md-1 col-sm-6">
                <div class="widget widget-app">
                    <h4 class="widget-title">experience app on mobile</h4>
                    <div class="app-btn">
                        <a href="#" class="google-play">
                            <i class="ti-android"></i>
                            <p><span>get it on</span>Goole play</p>
                        </a>
                        <a href="#" class="app-store">
                            <i class="ti-apple"></i>
                            <p><span>get it on</span>app store</p>
                        </a>
                    </div>
                </div>
                <div class="widget widget-social">
                    <h4 class="widget-title">Online shopping</h4>
                    <div class="social-media">
                        <a href="#"><i class="ti-facebook"></i></a><a href="#"><i class="ti-twitter-alt"></i></a><a href="#"><i class="ti-pinterest"></i></a><a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p class="copyright">Copyright © 2019 <a href="#">themeies.com</a>. All rights reserved.</p>
    </div>
</footer>
<!-- Footer end -->

<!-- JS -->

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>