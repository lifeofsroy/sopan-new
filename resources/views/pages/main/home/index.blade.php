@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $setting->slogan }} </title>
@endpush

@section('main-section')
    <!--Slider-->
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
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer-three" style="background-image: url({{ asset('storage') }}/{{ $slider->image }});">
                        </div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three-color"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">{{ $slider->subtitle }}</p>
                                        <h2 class="main-slider-three__title" style="font-size: 60px;">{{ $slider->title }}</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a class="thm-btn main-slider-three__btn" href="{{ route('home.slider.detail', $slider->slug) }}">Discover
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- If we need navigation buttons -->
        </div>
    </section>

    <!--Welcome-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{ asset('storage') }}/{{ $welcome->image }}" alt="{{ $welcome->title }}">
                            </div>
                            <div class="about-one__img-border"></div>
                            <div class="about-one__curved-circle-box">
                                <div class="curved-circle">
                                    <span class="curved-circle--item">{{ $welcome->brand }}</span>
                                </div><!-- /.curved-circle -->
                                <div class="about-one__curved-circle-icon">
                                    <img src="{{ asset('storage') }}/{{ $welcome->logo }}" alt="{{ $welcome->title }}">
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
                            <span class="section-title__tagline">{{ $welcome->subtitle }}</span>
                            <h2 class="section-title__title">{{ $welcome->title }}</h2>
                        </div>
                        <p class="about-one__text">{{ $welcome->description }}</p>
                        <div class="about-one__fund">
                            <p class="about-one__fund-text">{!! $welcome->context !!}</p>
                        </div>

                        <a class="thm-btn about-one__btn" href="{{ route('about') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Parallex-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('storage') }}/{{ $parallax->image }});"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url({{ asset('assets/main/images/shapes/become-volunteer-shape-1-dark.png') }});"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">{{ $parallax->subtitle }}</p>
                <h3 class="become-volunteer-one__title">{{ $parallax->title }}</h3>
                <div class="become-volunteer-one__btn-box">
                    <a class="thm-btn become-volunteer-one__btn" href="{{ route('volunteer') }}">How To Join ?</a>
                </div>
            </div>
        </div>
    </section>

    <!--Projects-->
    <section class="events-one">
        <div class="events-one-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/events-one-shape-1.png') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="events-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Recent Projcts</span>
                            <h2 class="section-title__title">Join our latest and upcoming projects</h2>
                        </div>
                        <a class="thm-btn events-one__btn" href="{{ route('project') }}">Discover More</a>
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
                            @foreach ($projects as $project)
                                <div class="item">
                                    <!--Events One Single Start-->
                                    <div class="events-one__single">
                                        <div class="events-one__img">
                                            <img src="{{ asset('storage') }}/{{ $project->thumbnail }}" alt="{{ $project->title }}">
                                            <div class="events-one__date">
                                                <p>{{ $project->category->name }}</p>
                                            </div>
                                            <div class="events-one__content">
                                                <h3 class="events-one__title"><a
                                                        href="{{ route('project.detail', $project->slug) }}">{{ $project->title }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Events One Single End-->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Feature-->
    <section class="feature-one">
        <div class="container">
            <div class="row">
                @foreach ($features as $key => $feature)
                    <div class="col-xl-6 col-lg-6 wow {{ $key == 0 ? 'slideInLeft' : 'slideInRight' }}" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="feature-one__single {{ $key == 0 ? '' : 'feature-one__single--two' }}">
                            <div class="feature-one__single-bg"
                                style="background-image: url({{ asset('assets/main/images/shapes/feature-one-shape-1.png') }});"></div>
                            <div class="feature-one__top">
                                <div class="feature-one__top-inner">
                                    <div class="feature-one__top-icon {{ $key == 0 ? '' : 'feature-one__top-icon--two' }}">
                                        <span class="{{ $key == 0 ? 'icon-help' : 'icon-gift-box' }}"></span>
                                    </div>
                                    <div class="feature-one__top-title-box">
                                        <h3 class="feature-one__top-title">{{ $feature->title }}</h3>
                                    </div>
                                </div>
                            </div>

                            <p class="feature-one__text">{{ $feature->subtitle }}</p>

                            <div class="text-light">
                                {!! $feature->description !!}
                            </div>

                            <a class="thm-btn feature-one__btn mt-3" href="{{ route('home.feature.detail', $feature->slug) }}">View details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--Testimonial-->
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
                            @foreach ($testimonials as $testimonial)
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1"
                                            style="background-image: url({{ asset('assets/main/images/shapes/testimonial-one-shape-1.png') }});">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('storage') }}/{{ $testimonial->image }}" alt="{{ $testimonial->name }}">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">{{ $testimonial->name }}</h3>
                                            <p class="testimonial-one__client-sub-title">{{ $testimonial->designation }}</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">{{ $testimonial->description }}</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Upcoming Event-->
    <section class="urgent-cause" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="container">
            <div class="urgent-cause__inner wow fadeInUp" data-wow-delay="100ms" style="padding: 50px 100px 60px;">
                <div class="urgent-cause-bg" style="background-image: url({{ asset('assets/main/images/backgrounds/main-slider-3-1.jpg') }});"></div>
                <div class="urgent-cause__top">
                    <div class="urgent-cause__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Upcoming Event</span>
                            <h2 class="section-title__title">{{ $event->title }}</h2>
                            <p class="make-donation__text pb-0" style="font-size: 21px;">{{ $event->overview }}</p>
                            <a class="text-warning" href="{{ route('event.detail', $event->slug) }}">Read More</a>
                        </div>
                    </div>
                    <div class="urgent-cause__top-right">
                        <div class="urgent-cause__btn">
                            <a href="#"> <span class="fa fa-heart"></span>Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="urgent-cause__progress">
                    <div class="urgent-cause__goals">
                        <p><i class="fas fa-calendar-alt"></i> Left {{ Carbon\Carbon::parse($event->happen_at)->diffForHumans() }}</p>
                        <p><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Gallery-->
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

    <!--FAQ-->
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

    <!--Counter-->
    <section class="counter-one">
        <div class="container">
            <div class="counter-one__inner">
                <div class="counter-one-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url({{ asset('assets/main/images/backgrounds/counter-one-bg.jpg') }});"></div>
                <ul class="list-unstyled counter-one__list">
                    @foreach ($counters as $counter)
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="{{ $counter->value }}">00</h3>
                                <span class="counter-one__letter">{{ $counter->unit }}</span>
                            </div>
                            <p class="counter-one__text">{{ $counter->title }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!--News-->
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
                            <img src="{{ asset('storage') }}/{{ $news_first->image }}" alt="">
                            <div class="news-two__date-one">
                                <p>{{ Carbon\Carbon::parse($news_first->created_at)->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="news-two__content-one">
                            <h3 class="news-two__title-one"><a href="{{ route('news.detail', $news_first->slug) }}">{{ $news_first->title }}</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-8">
                    <div class="news-two__single">
                        <ul class="list-unstyled news-two__list">
                            @foreach ($news_others as $news)
                                <li class="news-two__list-single">
                                    <div class="news-two__img-two">
                                        <img src="{{ asset('storage') }}/{{ $news->image }}" alt="{{ $news->title }}">
                                        <div class="news-two__date-two">
                                            <p>{{ Carbon\Carbon::parse($news->created_at)->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <div class="news-two__content-two">
                                        <h3 class="news-two__title-two"><a href="{{ route('news.detail', $news->slug) }}">{{ $news->title }}</a></h3>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Brand-->
    <section class="brand-one brand-two">
        <div class="brand-two-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/brand-two-shape-1.png') }});">
        </div>
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
                    @foreach ($brands as $brand)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage') }}/{{ $brand->image }}" alt="{{ $brand->name }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
