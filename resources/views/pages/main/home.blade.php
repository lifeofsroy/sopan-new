@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $setting->slogan }} </title>
@endpush

@section('main-section')
    <!--Main Slider Start-->
    <section class="main-slider-three clearfix">
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
                    <div class="image-layer-three" style="background-image: url({{asset('assets/main/images/backgrounds/main-slider-3-1.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider-three-color"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <p class="main-slider-three__sub-title">Welcome to Oxpins Non Profit Theme</p>
                                    <h2 class="main-slider-three__title">Let's give them a <br> helping hand</h2>
                                    <div class="main-slider-three__btn-box">
                                        <a class="thm-btn main-slider-three__btn" href="about.html">Discover
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer-three" style="background-image: url({{asset('assets/main/images/backgrounds/main-slider-3-2.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider-three-color"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <p class="main-slider-three__sub-title">Welcome to Oxpins Non Profit Theme</p>
                                    <h2 class="main-slider-three__title">Let’s give them a <br> helping hand</h2>
                                    <div class="main-slider-three__btn-box">
                                        <a class="thm-btn main-slider-three__btn" href="about.html">Discover
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer-three" style="background-image: url({{asset('assets/main/images/backgrounds/main-slider-3-3.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider-three-color"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <p class="main-slider-three__sub-title">Welcome to Oxpins Non Profit Theme</p>
                                    <h2 class="main-slider-three__title">Let’s give them a <br> helping hand</h2>
                                    <div class="main-slider-three__btn-box">
                                        <a class="thm-btn main-slider-three__btn" href="about.html">Discover
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->


        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">

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
                                    <span class="curved-circle--item">
                                        25 YEARS EXPERIENCE OXPINS CHARITY CENTER
                                    </span>
                                </div><!-- /.curved-circle -->
                                <div class="about-one__curved-circle-icon">
                                    <img src="{{ asset('assets/main/images/icon/curved-circle-icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="about-one__shape-2 zoom-fade">
                                <img src="{{ asset('assets/main/images/shapes/about-one-shape-2.png') }}" alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="{{ asset('assets/main/images/shapes/about-one-shape-3.png') }}" alt="">
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
                                    <h5><a href="{{route('volunteer')}}">Join our team</a></h5>
                                    <p>Lorem ipsum dolor sit amet not quis mis notted.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-solidarity"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="{{route('donate')}}">Start donating</a></h5>
                                    <p>Lorem ipsum dolor sit amet not quis mis notted.</p>
                                </div>
                            </li>
                        </ul>
                        <a class="thm-btn about-one__btn" href="{{route('about')}}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

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
                    <a class="thm-btn become-volunteer-one__btn" href="{{route('volunteer')}}">Become a Volunteer</a>
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

    <!--Urgent Cause Start-->
    <section class="urgent-cause">
        <div class="container">
            <div class="urgent-cause__inner wow fadeInUp" data-wow-delay="100ms">
                <div class="urgent-cause-bg"
                    style="background-image: url({{ asset('assets/main/images/backgrounds/urgent-cause-bg.jpg')}});"></div>
                <div class="urgent-cause__top">
                    <div class="urgent-cause__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Donate to urgent cause</span>
                            <h2 class="section-title__title">Support for eating funds <br> for hungry people</h2>
                        </div>
                    </div>
                    <div class="urgent-cause__top-right">
                        <p class="urgent-cause__top-text">if you want a detail for this click this button now</p>
                        <div class="urgent-cause__btn">
                            <a href="donate-now.html"> <span class="fa fa-heart"></span>Donate now</a>
                        </div>
                        <p class="urgent-cause__date">10 July 2022</p>
                    </div>
                </div>
                <div class="urgent-cause__progress">
                    <div class="bar">
                        <div class="bar-inner count-bar" data-percent="70%">
                            <div class="count-text">70%</div>
                        </div>
                    </div>
                    <div class="urgent-cause__goals">
                        <p><span>$28,000.00</span> Donated</p>
                        <p><span>$80,000.00</span> Goal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Urgent Cause End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one__top">
            <h3 class="gallery-one__top-title">Our photo gallery</h3>
        </div>
        <div class="gallery-one__bottom">
            <div class="container">
                <div class="gallery-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                    data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-1.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-1.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-2.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-2.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-3.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-3.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-4.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-4.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-5.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-5.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-6.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-6.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-7.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-7.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-8.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-8.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="item">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ asset('assets/main/images/gallery/gallery-page-1-9.jpg') }}" alt="">
                                <a class="img-popup" href="{{ asset('assets/main/images/gallery/gallery-page-1-9.jpg') }}"></a>
                                <!-- /.img-popup -->
                                <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">Charity</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                </div>
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
                        <a class="thm-btn faq-one__btn" href="{{route('faq')}}">Learn how to get help</a>
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

    <!--News Two Start-->
    <section class="news-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">News & articles</span>
                <h2 class="section-title__title">Directly from the <br> latest news and articles</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-4">
                    <div class="news-two__single">
                        <div class="news-two__img-one">
                            <img src="{{asset('assets/main/images/blog/news-2-1.jpg')}}" alt="">
                            <div class="news-two__date-one">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                        <div class="news-two__content-one">
                            <ul class="list-unstyled news-two__meta-one">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i> By admin</a>
                                </li>
                                <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-two__title-one"><a href="news-details.html">How does the
                                    malnutrition affect children?</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="news-two__single">
                        <ul class="list-unstyled news-two__list">
                            <li class="news-two__list-single">
                                <div class="news-two__img-two">
                                    <img src="{{asset('assets/main/images/blog/news-2-2.jpg')}}" alt="">
                                    <div class="news-two__date-two">
                                        <p>23 May, 2022</p>
                                    </div>
                                </div>
                                <div class="news-two__content-two">
                                    <ul class="list-unstyled news-two__meta-two">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> By
                                                admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-two__title-two"><a href="news-details.html">Donation is hope for
                                            poor childrens in africa</a></h3>
                                </div>
                            </li>
                            <li class="news-two__list-single">
                                <div class="news-two__img-two">
                                    <img src="{{asset('assets/main/images/blog/news-2-3.jpg')}}" alt="">
                                    <div class="news-two__date-two">
                                        <p>23 May, 2022</p>
                                    </div>
                                </div>
                                <div class="news-two__content-two">
                                    <ul class="list-unstyled news-two__meta-two">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> By
                                                admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-two__title-two"><a href="news-details.html">It has roots in a
                                            piece of classical Latin</a></h3>
                                </div>
                            </li>
                            <li class="news-two__list-single">
                                <div class="news-two__img-two">
                                    <img src="{{asset('assets/main/images/blog/news-2-4.jpg')}}" alt="">
                                    <div class="news-two__date-two">
                                        <p>23 May, 2022</p>
                                    </div>
                                </div>
                                <div class="news-two__content-two">
                                    <ul class="list-unstyled news-two__meta-two">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> By
                                                admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-two__title-two"><a href="news-details.html">randomised words
                                            which don't look even</a></h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Two End-->

    <!--Brand One Start-->
    <section class="brand-one brand-two">
        <div class="brand-two-shape-1" style="background-image: url({{asset('assets/main/images/shapes/brand-two-shape-1.png')}});">
        </div>
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                        <img src="{{asset('assets/main/images/brand/brand-1-1.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-2.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-3.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-4.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-5.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-6.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-1.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-2.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-3.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-4.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-5.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/main/images/brand/brand-1-6.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
@endsection
