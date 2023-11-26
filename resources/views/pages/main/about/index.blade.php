@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | About Us </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section title="Know About Us" link="About Us" />

    <!--Feature-->
    <section class="feature-two">
        <div class="container">
            <div class="row">
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-two__single">
                        <div class="feature-two__single-inner">
                            <div class="feature-two-shape-1"
                                style="background-image: url({{asset('assets/main/images/shapes/feature-two-shape-1.png')}});"></div>
                            <div class="feature-two__content-box">
                                <div class="feature-two__content-left">
                                    <p class="feature-two__tagline">Donate to</p>
                                    <h3 class="feature-two__title"><a href="about.html">Eduction & <br> healthy
                                            food</a></h3>
                                </div>
                                <div class="feature-two__icon">
                                    <span class="icon-apple"></span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-two__arrow">
                            <a href="about.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End-->
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-two__single">
                        <div class="feature-two__single-inner">
                            <div class="feature-two-shape-1"
                                style="background-image: url({{asset('assets/main/images/shapes/feature-two-shape-1.png')}});"></div>
                            <div class="feature-two__content-box">
                                <div class="feature-two__content-left">
                                    <p class="feature-two__tagline">Donate to</p>
                                    <h3 class="feature-two__title"><a href="about.html">Medical & <br>
                                            treatement</a></h3>
                                </div>
                                <div class="feature-two__icon">
                                    <span class="icon-health-insurance"></span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-two__arrow">
                            <a href="about.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End-->
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-two__single">
                        <div class="feature-two__single-inner">
                            <div class="feature-two-shape-1"
                                style="background-image: url({{asset('assets/main/images/shapes/feature-two-shape-1.png')}});"></div>
                            <div class="feature-two__content-box">
                                <div class="feature-two__content-left">
                                    <p class="feature-two__tagline">Donate to</p>
                                    <h3 class="feature-two__title"><a href="about.html">Bring people <br>
                                            together</a></h3>
                                </div>
                                <div class="feature-two__icon">
                                    <span class="icon-business-partnership"></span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-two__arrow">
                            <a href="about.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End-->
            </div>
        </div>
    </section>

    <!--Welcome-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box  wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="{{asset('assets/main/images/resources/about-two-img-1.jpg')}}" alt="">
                            </div>
                            <div class="about-two__img-two">
                                <img src="{{asset('assets/main/images/resources/about-two-img-2.jpg')}}" alt="">
                            </div>
                            <div class="about-two__left-title-box">
                                <h3 class="about-two__left-title">Help us today!</h3>
                            </div>
                            <div class="about-two__shape-1 zoominout">
                                <img src="{{asset('assets/main/images/shapes/about-two-shape-1.png')}}" alt="">
                            </div>
                            <div class="about-two__shape-2 rotate-me">
                                <img src="{{asset('assets/main/images/shapes/about-two-shape-2.png')}}" alt="">
                            </div>
                            <div class="about-two__shape-3 float-bob-y">
                                <img src="{{asset('assets/main/images/shapes/about-two-shape-3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Get to know about oxpins</span>
                            <h2 class="section-title__title">Helping each other can make world better</h2>
                        </div>
                        <p class="about-two__text-1">We help companies develop powerful corporate social
                            responsibility, grantmaking, and employee engagement strategies. Our impact is about
                            more than moving money to where it’s needed most.</p>
                        <ul class="list-unstyled about-two__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-target"></span>
                                </div>
                                <div class="text">
                                    <h4>Our mission</h4>
                                    <p>Nonprofits around the world apply and join us to access more funding.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-solidarity-1"></span>
                                </div>
                                <div class="text">
                                    <h4>Our story</h4>
                                    <p>Nonprofits around the world apply and join us to access more funding.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-two__progress">
                            <div class="about-two__progress-single">
                                <h4 class="about-two__progress-title">Charity</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="76%">
                                        <div class="count-text">76%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-two__progress-single">
                                <h4 class="about-two__progress-title">Donations</h4>
                                <div class="bar marb-0">
                                    <div class="bar-inner count-bar" data-percent="86%">
                                        <div class="count-text">86%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="thm-btn about-two__btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Achievements-->
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
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Expert Team-->
    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our expert team</span>
                <h2 class="section-title__title">Meet the team behind <br> their success story</h2>
            </div>
            <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('assets/main/images/team/team-1-1.jpg')}}" alt="">
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="team-details.html">Sarah albert</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Vounteers-->
    <section class="team-carousel-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our expert team</span>
                <h2 class="section-title__title">Meet the team behind <br> their success story</h2>
            </div>
            <div class="team-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
                "items": 3,
                "margin": 30,
                "smartSpeed": 2000,
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
@endsection