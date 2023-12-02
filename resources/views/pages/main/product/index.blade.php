@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Products </title>
@endpush

@section('main-section')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('assets/main/images/backgrounds/page-header-bg.jpg')}})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Shop</li>
                </ul>
                <h2>Products</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Page Header End-->
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="product__sidebar">
                        <div class="shop-search product__sidebar-single">
                            <form action="#">
                                <input type="text" placeholder="Search">
                            </form>
                        </div>
                        <div class="product__price-ranger product__sidebar-single">
                            <h3 class="product__sidebar-title">Price</h3>
                            <div class="price-ranger">
                                <div id="slider-range"></div>
                                <div class="ranger-min-max-block">
                                    <input type="text" readonly class="min">
                                    <span>-</span>
                                    <input type="text" readonly class="max">
                                    <input type="submit" value="Filter">
                                </div>
                            </div>
                        </div>
                        <div class="shop-category product__sidebar-single">
                            <h3 class="product__sidebar-title">Categories</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Donations</a></li>
                                <li class="active"><a href="#">Charity</a></li>
                                <li><a href="#">Fundraising</a></li>
                                <li><a href="#">Food & Water</a></li>
                                <li><a href="#">Kids Education</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="product__items">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="product__showing-result">
                                    <div class="product__showing-text-box">
                                        
                                    </div>
                                    <div class="product__showing-sort">
                                        <p class="product__showing-text">12 products found</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__all">
                            <div class="row">
                                
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-1.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Boss
                                                        chair</a></h4>
                                                <p class="product__all-price">$33.00</p>
                                                <div class="product__all-btn-box">
                                                    <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                            <div class="products__all-icon-boxes">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-eye"></i></a>
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
    <!--Page Header End-->
@endsection