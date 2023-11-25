@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $setting->slogan }} </title>
@endpush
@section('main-section')
    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset('assets/main/images/backgrounds/main-slider-1-1.png') }});"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/main-slider-shape-1.jpg') }});"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="{{ asset('assets/main/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Always donate for childrens</p>
                                    <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn main-slider__btn" href="about.html"> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset('assets/main/images/backgrounds/main-slider-1-2.png') }});"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/main-slider-shape-1.jpg') }});">
                    </div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="{{ asset('assets/main/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Always donate for childrens</p>
                                    <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn main-slider__btn" href="about.html"> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset('assets/main/images/backgrounds/main-slider-1-3.png') }});"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/main-slider-shape-1.jpg') }});">
                    </div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="{{ asset('assets/main/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Always donate for childrens</p>
                                    <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                    <div class="main-slider__btn-box">
                                        <a class="thm-btn main-slider__btn" href="about.html"> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape-box-1">
            <div class="about-one__shape-1" style="background-image: url({{ asset('assets/main/images/shapes/about-one-shape-1.png') }});"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{ asset('assets/main/images/resources/about-one-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-one__img-border"></div>
                            <div class="about-one__curved-circle-box">
                                <div class="curved-circle">
                                    <span class="curved-circle--item">25 Years Experience oxpins Charity
                                        Center</span>
                                </div><!-- /.curved-circle -->
                                <div class="about-one__curved-circle-icon">
                                    <img src="{{ asset('assets/main/images/icon/curved-circle-icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="about-one__shape-2 zoom-fade">
                                <img src="{{ asset('assets/main/images/shapes/about-one-shape-2.png') }}" alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="{{ asset('assets/main/images/shapes/about-one-shape-3-dark.png') }}" alt="">
                            </div>
                            <div class="about-one__shape-4 zoominout">
                                <img src="{{ asset('assets/main/images/shapes/about-one-shape-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Welcome to oxpins charity</span>
                            <h2 class="section-title__title">Helping each other can make world better</h2>
                        </div>
                        <p class="about-one__text">We help companies develop powerful corporate social
                            responsibility, grantmaking, and employee engagement strategies. Our impact is about
                            more than moving money to where it’s needed most it’s also about helping nonprofits
                            access information and ideas that will help them listen, learn, and grow. </p>
                        <div class="about-one__fund">
                            <p class="about-one__fund-text">Helped fund <span>24,537</span> Projects in
                                <span>24</span> Countries, Benefiting over <br> <span>8.2</span> Million people.
                            </p>
                        </div>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-volunteer"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="become-volunteer.html">Join our team</a></h5>
                                    <p>Lorem ipsum dolor sit amet not quis mis notted.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-solidarity"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="donate-now.html">Start donating</a></h5>
                                    <p>Lorem ipsum dolor sit amet not quis mis notted.</p>
                                </div>
                            </li>
                        </ul>
                        <a class="thm-btn about-one__btn" href="about.html">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Causes One Start-->
    <section class="causes-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Help & donate us now</span>
                <h2 class="section-title__title">Find the popular cause <br> and donate them</h2>
            </div>
            <div class="row">
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{ asset('assets/main/images/resources/causes-1-1.jpg') }}" alt="">
                            <div class="causes-one__cat">
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="donation-details.html">Let’s education for
                                    children get good life</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url({{ asset('assets/main/images/shapes/causes-one-progress-shape-1.png') }});">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{ asset('assets/main/images/resources/causes-1-2.jpg') }}" alt="">
                            <div class="causes-one__cat">
                                <p>Medical</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="donation-details.html">It is a long established
                                    fact that a reader</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url({{ asset('assets/main/images/shapes/causes-one-progress-shape-1.png') }});">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{ asset('assets/main/images/resources/causes-1-3.jpg') }}" alt="">
                            <div class="causes-one__cat">
                                <p>Food</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="donation-details.html">There are many variations
                                    of passages</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url({{ asset('assets/main/images/shapes/causes-one-progress-shape-1.png') }});">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
            </div>
        </div>
    </section>
    <!--Causes One End-->

    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('assets/main/images/backgrounds/become-volunteer-one-bg.jpg') }});"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url({{ asset('assets/main/images/shapes/become-volunteer-shape-1-dark.png') }});"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">Become a Volunteers</p>
                <h3 class="become-volunteer-one__title">Join your hand with us for a <br> better life and future
                </h3>
                <div class="become-volunteer-one__btn-box">
                    <a class="thm-btn become-volunteer-one__btn" href="become-volunteer.html">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer One End-->

    <!--Events One Start-->
    <section class="events-one">
        <div class="events-one-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/events-one-shape-1.png') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="events-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Upcoming events</span>
                            <h2 class="section-title__title">Join our latest upcoming events</h2>
                        </div>
                        <p class="events-one__text-1">There are many variations of passages of lorem ipsum available
                            but the majority have suffered.</p>
                        <a class="thm-btn events-one__btn" href="event-details.html">Discover More</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="events-one__right">
                        <div class="events-one__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 20,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/main/images/events/events-1-1.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Play for the
                                                    world
                                                    with us</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/main/images/events/events-1-2.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Contrary to
                                                    popular belief</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/main/images/events/events-1-3.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">There are
                                                    many variations of</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/main/images/events/events-1-1.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Play for the
                                                    world
                                                    with us</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/main/images/events/events-1-2.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Contrary to
                                                    popular belief</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/main/images/events/events-1-3.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">There are
                                                    many variations of</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Events One End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single">
                        <div class="feature-one__single-bg"
                            style="background-image: url({{ asset('assets/main/images/shapes/feature-one-shape-1.png') }});"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-icon">
                                    <span class="icon-help"></span>
                                </div>
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="donation-details.html">Join us &
                                            become <br> a
                                            volunteer</a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Mauris feugiat at orci ac congue. mauris ut <br> lacus quis
                            proin
                            diam.</p>
                        <ul class="list-unstyled feature-one__point">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Sed et nulla a nunc finibus eleifend.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Mauris nulla nisl, pellentesque vetae.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Proin quis aliquam nisi.</p>
                                </div>
                            </li>
                        </ul>
                        <a class="thm-btn feature-one__btn" href="donation-details.html">View details</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single feature-one__single--two">
                        <div class="feature-one__single-bg"
                            style="background-image: url({{ asset('assets/main/images/shapes/feature-one-shape-1.png') }});"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-icon feature-one__top-icon--two">
                                    <span class="icon-gift-box"></span>
                                </div>
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="about.html">Send
                                            a gift for <br>
                                            childrens</a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Mauris feugiat at orci ac congue. mauris ut <br> lacus quis
                            proin
                            diam.</p>
                        <ul class="list-unstyled feature-one__point">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Sed et nulla a nunc finibus eleifend.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Mauris nulla nisl, pellentesque vetae.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Proin quis aliquam nisi.</p>
                                </div>
                            </li>
                        </ul>
                        <a class="thm-btn feature-one__btn" href="about.html">View details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 6
                        }
                    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-1-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-2-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-3-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-4-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-5-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-6-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-1-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-2-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-3-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-4-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-5-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/main/images/brand/brand-1-6-dark.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{ asset('assets/main/images/backgrounds/testimonial-one-bg.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Testimonials</span>
                            <h2 class="section-title__title">What they are talking about oxpins</h2>
                        </div>
                        <p class="testimonial-one__text-1">Nulla ultricies justo sit amet ante efficitur, eget
                            pharetra augue efficitur. Vestibulum viverra, dolor sit amet ultricies ornare, elit
                            justo pretium tellus.</p>
                        <a class="thm-btn testimonial-one__btn" href="#">all testimonials</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__img-1 zoom-fade">
                            <img src="{{ asset('assets/main/images/testimonial/testimonial-img-1.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-2 zoom-fade">
                            <img src="{{ asset('assets/main/images/testimonial/testimonial-img-2.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-3 zoom-fade">
                            <img src="{{ asset('assets/main/images/testimonial/testimonial-img-3.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-4 zoom-fade">
                            <img src="{{ asset('assets/main/images/testimonial/testimonial-img-4.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 50,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 1
                                },
                                "1200": {
                                    "items": 1
                                }
                            }
                        }'>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/main/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/main/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Kevin martin</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/main/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/main/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jessica brown</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/main/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/main/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Mike hardson</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/main/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/main/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Kevin martin</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/main/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/main/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jessica brown</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/main/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/main/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Mike hardson</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one__top">
            <h3 class="gallery-one__top-title">Our photo gallery</h3>
        </div>
        <div class="gallery-one__bottom">
            <div class="gallery-one__container">
                <ul class="list-unstyled gallery-one__list">
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/main/images/gallery/gallery-1-1.jpg') }}" alt="">
                            <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-1-1.jpg') }}"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/main/images/gallery/gallery-1-2.jpg') }}" alt="">
                            <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-1-2.jpg') }}"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/main/images/gallery/gallery-1-3.jpg') }}" alt="">
                            <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-1-3.jpg') }}"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/main/images/gallery/gallery-1-4.jpg') }}" alt="">
                            <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-1-4.jpg') }}"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="500ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/main/images/gallery/gallery-1-5.jpg') }}" alt="">
                            <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-1-5.jpg') }}"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Gallery One End-->

    <!--FAQ One Start-->
    <section class="faq-one">
        <div class="faq-one-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/faq-one-shape-1.png') }});"></div>
        <div class="faq-one-bg" style="background-image: url({{ asset('assets/main/images/backgrounds/faq-one-bg.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Recently asked questions</span>
                            <h2 class="section-title__title">People are frequently asking some questions from us
                            </h2>
                        </div>
                        <p class="faq-one__text-1">Proactively procrastinate cross-platform results via extensive
                            ideas distinctively underwhelm enterprise. Compellingly plagiarize value-added sources
                            with inexpensive schemas.</p>
                        <a class="thm-btn faq-one__btn" href="faq.html">Learn how to get help</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-one__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Nulla eu purus scelerisque, dignissim diam.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Quisque non diam porta, ullamcorper dolor sit amet.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How can I make a change to my application?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>Sed mattis neque sed commodo efficitur.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="container">
            <div class="counter-one__inner">
                <div class="counter-one-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url({{ asset('assets/main/images/backgrounds/counter-one-bg.jpg') }});"></div>
                <ul class="list-unstyled counter-one__list">
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="70">00</h3>
                            <span class="counter-one__letter">m</span>
                        </div>
                        <p class="counter-one__text">Total donation</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="48">00</h3>
                            <span class="counter-one__letter">k</span>
                        </div>
                        <p class="counter-one__text">Projects funded</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="38">00</h3>
                            <span class="counter-one__letter">%</span>
                        </div>
                        <p class="counter-one__text">Kids need help</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="230">00</h3>
                            <span class="counter-one__letter"></span>
                        </div>
                        <p class="counter-one__text">Our volunteers</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">News & articles</span>
                <h2 class="section-title__title">Directly from the <br> latest news and articles
                </h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{ asset('assets/main/images/blog/news-1-1.jpg') }}" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">How does the
                                            malnutrition
                                            affect children?</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                            More</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{ asset('assets/main/images/blog/news-1-2.jpg') }}" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">Lorem Ipsum has been the
                                            industry's standard</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                            More</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{ asset('assets/main/images/blog/news-1-3.jpg') }}" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">There are many
                                            variations of passages of Lorem</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                            More</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--News One End-->
@endsection
