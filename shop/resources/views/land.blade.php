
@extends('layouts.app')

@section('content')
<!-- Banner section start -->
<section class="banner" style="background-image: url(images/bg-1.jpg)">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 order-1 order-md-0">
                <div class="banner-content">
                    <span class="tagline">ultimate collection</span>
                    <h1>Complete Women Fashion Here</h1>
                    <a href="{{url('products')}}" class="btn-default">shop now</a>
                </div>
            </div>
            <div class="col-md-6 order-0 order-md-1">
                <div class="ban-img">
                    <img src="images/ban-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->

<!-- Featured Product start -->
<section class="feat-product">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sec-heading">
                    <h3 class="sec-title">Featured product</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="product-item">
                    <figure class="product-thumb">
                        <img src="images/products/1.jpg" alt="">
                        <div class="action-links">
                            <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                            <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                            <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                        </div>
                    </figure>
                    <div class="product-content">
                        <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                        <div class="ratings">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                        </div>
                        <p class="price">$35</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-item">
                    <figure class="product-thumb">
                        <img src="images/products/2.jpg" alt="">
                        <div class="action-links">
                            <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                            <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                            <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                        </div>
                    </figure>
                    <div class="product-content">
                        <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                        <div class="ratings">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                        </div>
                        <p class="price">$35</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-item">
                    <figure class="product-thumb">
                        <img src="images/products/3.jpg" alt="">
                        <div class="action-links">
                            <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                            <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                            <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                        </div>
                    </figure>
                    <div class="product-content">
                        <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                        <div class="ratings">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                        </div>
                        <p class="price">$35</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Product end -->

<!-- Banner 02 section start -->
<section class="banner02">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="banner-content">
                    <h1>50% off</h1>
                    <h4>all women’s collection</h4>
                    <a href="#" class="btn-default">shop now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ban-img">
                    <img src="images/ban-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner 02 section end -->

<!-- Popular products start -->
<section class="popular-products">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sec-heading">
                    <h3 class="sec-title">Most popular</h3>
                </div>
            </div>
        </div>
        <div class="product-carousel owl-carousel">
            <div class="product-item">
                <figure class="product-thumb">
                    <img src="images/products/4.jpg" alt="">
                    <div class="action-links">
                        <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                        <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                        <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                    </div>
                </figure>
                <div class="product-content">
                    <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                    <div class="ratings">
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                    </div>
                    <p class="price">$35</p>
                </div>
            </div>
            <div class="product-item">
                <figure class="product-thumb">
                    <img src="images/products/5.jpg" alt="">
                    <div class="action-links">
                        <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                        <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                        <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                    </div>
                </figure>
                <div class="product-content">
                    <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                    <div class="ratings">
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                    </div>
                    <p class="price">$35</p>
                </div>
            </div>
            <div class="product-item">
                <figure class="product-thumb">
                    <img src="images/products/6.jpg" alt="">
                    <div class="action-links">
                        <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                        <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                        <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                    </div>
                </figure>
                <div class="product-content">
                    <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                    <div class="ratings">
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                    </div>
                    <p class="price">$35</p>
                </div>
            </div>
            <div class="product-item">
                <figure class="product-thumb">
                    <img src="images/products/7.jpg" alt="">
                    <div class="action-links">
                        <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                        <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                        <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                    </div>
                </figure>
                <div class="product-content">
                    <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                    <div class="ratings">
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                        <a href="#"><i class="ti-star"></i></a>
                    </div>
                    <p class="price">$35</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular products end -->

<!-- Features section start -->
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="featureBox">
                    <img src="images/feature-icons/1.png" alt="Cash" class="feat-icon">
                    <h5>Money back gurantee</h5>
                    <p>Great fill signs he evening</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="featureBox">
                    <img src="images/feature-icons/2.png" alt="Delivery" class="feat-icon">
                    <h5>Free Delivery</h5>
                    <p>Great fill signs he evening</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="featureBox">
                    <img src="images/feature-icons/3.png" alt="Support" class="feat-icon">
                    <h5>Alway support</h5>
                    <p>Great fill signs he evening</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="featureBox">
                    <img src="images/feature-icons/4.png" alt="Secure payment" class="feat-icon">
                    <h5>Secure payment</h5>
                    <p>Great fill signs he evening</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->



<!-- Instagram start -->
<section class="instagram">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sec-heading">
                    <h3 class="sec-title">follow us</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="images/instagram/1.jpg" alt="">
                    <i class="ti-instagram"></i>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="images/instagram/2.jpg" alt="">
                    <i class="ti-instagram"></i>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="images/instagram/3.jpg" alt="">
                    <i class="ti-instagram"></i>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="images/instagram/4.jpg" alt="">
                    <i class="ti-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Instagram end -->

@stop