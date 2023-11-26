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
                                        <p class="product__showing-text">Showing 1–9 of 12 results</p>
                                    </div>
                                    <div class="product__showing-sort">
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Sort by popular">Sort by popular</option>
                                                <option value="1">Sort by popular</option>
                                                <option value="2">Sort by Price</option>
                                                <option value="3">Sort by Ratings</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__all">
                            <div class="row">
                                <!--Product All Single Start-->
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-2.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Sofa
                                                        chair</a></h4>
                                                <p class="product__all-price">$22.00</p>
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-3.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Comfy
                                                        chair</a></h4>
                                                <p class="product__all-price">$16.00</p>
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-4.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Classy
                                                        chair</a></h4>
                                                <p class="product__all-price">$9.00</p>
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-5.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Round
                                                        chair</a></h4>
                                                <p class="product__all-price">$23.00</p>
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-6.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Wooden
                                                        stool</a></h4>
                                                <p class="product__all-price">$10.00</p>
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-7.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Big
                                                        stool</a></h4>
                                                <p class="product__all-price">$17.00</p>
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-8.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Big
                                                        sofa</a></h4>
                                                <p class="product__all-price">$23.00</p>
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
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-single-inner">
                                            <div class="product__all-img">
                                                <img src="{{asset('assets/main/images/shop/shop-product-1-9.jpg')}}" alt="">
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Round
                                                        chair</a></h4>
                                                <p class="product__all-price">$8.00</p>
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
                                <!--Product All Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->
@endsection