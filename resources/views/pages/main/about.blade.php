@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | About Us </title>
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
                    <li class="active">Pages</li>
                </ul>
                <h2>About us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Four Start-->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box">
                            <div class="about-four__img">
                                <img src="{{asset('assets/main/images/resources/about-four-img-1.jpg')}}" alt="">
                            </div>
                            <div class="about-four__img-two">
                                <img src="{{asset('assets/main/images/resources/about-four-img-2.jpg')}}" alt="">
                            </div>
                            <div class="about-four__border"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">About oxpins</span>
                            <h2 class="section-title__title">Get to know about our
                                oxpins organization</h2>
                        </div>
                        <p class="about-four__text">Nam ultrices odio a felis lobortis convallis. In ex nunc, ornare
                            non condimentum et, egestas vel massa. Nullam hendrerit felis quis pellentesque
                            porttitor. Aenean lobortis bibendum turpis et auctor. Nam iaculis, lectus vulputate
                            cursus interdum.</p>
                        <ul class="list-unstyled about-four__points">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Proin sed magna vel mi suscipit commodo.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Cras aliquet nulla ut varius blandit.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Nulla auctor ipsum sed nisi lis porttitor.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-four__btn-box">
                            <a href="about.html" class="thm-btn about-four__btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!--Testimonial Two Start-->
    <section class="testimonial-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our testimonials</span>
                <h2 class="section-title__title">What they’re talking <br> about oxpins</h2>
            </div>
            <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 30,
                "nav": false,
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
                        "items": 2
                    },
                    "1200": {
                        "items": 3
                    }
                }
            }'>
                <div class="item">
                    <!--Testimonial Two Single Start-->
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__img">
                            <img src="{{asset('assets/main/images/testimonial/testimonial-2-1.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-two__content">
                            <div class="testimonial-two__shape-1"
                                style="background-image: url({{asset('assets/main/images/shapes/testimonial-two-shape-1.png')}});">
                            </div>
                            <p class="testimonial-two__text">This is due to their best service, pricing and customer
                                support. It’s throughly refresing to such a personal touch. Duis aute irure lupsum
                                reprehenderit.</p>
                            <div class="testimonial-two__client-info">
                                <h4 class="testimonial-two__client-name">Sarah albert</h4>
                                <p class="testimonial-two__client-sub-title">Volunteer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                </div>
                <div class="item">
                    <!--Testimonial Two Single Start-->
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__img">
                            <img src="{{asset('assets/main/images/testimonial/testimonial-2-2.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-two__content">
                            <div class="testimonial-two__shape-1"
                                style="background-image: url({{asset('assets/main/images/shapes/testimonial-two-shape-1.png')}});">
                            </div>
                            <p class="testimonial-two__text">This is due to their best service, pricing and customer
                                support. It’s throughly refresing to such a personal touch. Duis aute irure lupsum
                                reprehenderit.</p>
                            <div class="testimonial-two__client-info">
                                <h4 class="testimonial-two__client-name">Kevin martin</h4>
                                <p class="testimonial-two__client-sub-title">Volunteer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                </div>
                <div class="item">
                    <!--Testimonial Two Single Start-->
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__img">
                            <img src="{{asset('assets/main/images/testimonial/testimonial-2-3.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-two__content">
                            <div class="testimonial-two__shape-1"
                                style="background-image: url({{asset('assets/main/images/shapes/testimonial-two-shape-1.png')}});">
                            </div>
                            <p class="testimonial-two__text">This is due to their best service, pricing and customer
                                support. It’s throughly refresing to such a personal touch. Duis aute irure lupsum
                                reprehenderit.</p>
                            <div class="testimonial-two__client-info">
                                <h4 class="testimonial-two__client-name">Jessica brown</h4>
                                <p class="testimonial-two__client-sub-title">Volunteer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Two End-->

    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{asset('assets/main/images/backgrounds/become-volunteer-one-bg.jpg')}});"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url({{asset('assets/main/images/shapes/become-volunteer-shape-1.png')}});"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">Become a Volunteers</p>
                <h3 class="become-volunteer-one__title">Join your hand with us for a <br> better life and future
                </h3>
                <div class="become-volunteer-one__btn-box">
                    <a href="become-volunteer.html" class="thm-btn become-volunteer-one__btn">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer One End-->

    <!--FAQ One Start-->
    <section class="faq-one faq-two">
        <div class="faq-one-shape-1" style="background-image: url({{asset('assets/main/images/shapes/faq-one-shape-1.png')}});"></div>
        <div class="faq-one-bg" style="background-image: url({{asset('assets/main/images/backgrounds/faq-one-bg.png')}});"></div>
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
                        <a href="faq.html" class="thm-btn faq-one__btn">Learn how to get help</a>
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

    <!--Team One Start-->
    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our expert team</span>
                <h2 class="section-title__title">Meet the team behind <br> their success story</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-1.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Sarah albert</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-2.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Kevin martin</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-3.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Aleesha eve</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-4.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">David cooper</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Team One Start-->
    <section class="team-carousel-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our expert team</span>
                <h2 class="section-title__title">Meet the team behind <br> their success story</h2>
            </div>
            <div class="team-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
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
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-1.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Sarah albert</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-2.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Kevin martin</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-3.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Aleesha eve</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-4.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">David cooper</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-5.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Mike hardson</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-6.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Jessica brown</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-7.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Yoni smith</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-8.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Christine rob</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-1.jpg')}}" alt="">
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Sarah albert</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Brand One Start-->
    <section class="brand-one brand-three">
        <div class="brand-two-shape-1" style="background-image: url({{asset('assets/main/images/shapes/brand-three-shape-1.png')}});">
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