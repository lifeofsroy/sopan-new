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
                @foreach ($features as $feature)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two-shape-1"
                                    style="background-image: url({{ asset('assets/main/images/shapes/feature-two-shape-1.png') }});"></div>
                                <div class="feature-two__content-box">
                                    <div class="feature-two__content-left">
                                        <p class="feature-two__tagline">{{ $feature->subtitle }}</p>
                                        <h3 class="feature-two__title"><a href="{{ $feature->link }}">{{ $feature->title }}</a></h3>
                                    </div>
                                    <div class="feature-two__icon">
                                        <span class="{{ $feature->icon }}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-two__arrow">
                                <a href="{{ $feature->link }}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--Welcome-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="{{ asset('storage') }}/{{ $welcome->image_large }}" alt="">
                            </div>
                            <div class="about-two__img-two">
                                <img src="{{ asset('storage') }}/{{ $welcome->image_small }}" alt="">
                            </div>
                            <div class="about-two__left-title-box">
                                <h3 class="about-two__left-title">{{ $welcome->context }}</h3>
                            </div>
                            <div class="about-two__shape-1 zoominout">
                                <img src="{{ asset('assets/main/images/shapes/about-two-shape-1.png') }}" alt="">
                            </div>
                            <div class="about-two__shape-2 rotate-me">
                                <img src="{{ asset('assets/main/images/shapes/about-two-shape-2.png') }}" alt="">
                            </div>
                            <div class="about-two__shape-3 float-bob-y">
                                <img src="{{ asset('assets/main/images/shapes/about-two-shape-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">{{ $welcome->subtitle }}</span>
                            <h2 class="section-title__title">{{ $welcome->title }}</h2>
                        </div>
                        <p class="about-two__text-1">{{ $welcome->overview }}</p>

                        <a class="thm-btn about-two__btn mt-4" href="{{ route('about.more') }}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Achievements-->
    <section class="testimonial-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Achievements</span>
                <h2 class="section-title__title">Our Achievements</h2>
            </div>
            <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 30,
                "nav": false,
                "dots": true,
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
                @foreach ($achievements as $achievement)
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('storage') }}/{{ $achievement->image }}" alt="">
                            </div>
                            <div class="testimonial-two__content">
                                <div class="testimonial-two__shape-1"
                                    style="background-image: url({{ asset('assets/main/images/shapes/testimonial-two-shape-1.png') }});">
                                </div>
                                <p class="testimonial-two__text">{{ $achievement->description }}</p>
                                <div class="testimonial-two__client-info">
                                    <h4 class="testimonial-two__client-name">{{ $achievement->name }}</h4>
                                    <p class="testimonial-two__client-sub-title">{{ $achievement->designation }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                @foreach ($members as $member)
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ 100 * $loop->iteration }}ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('storage') }}/{{ $member->image }}" alt="{{ $member->name }}">
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">{{ $member->name }}</a></h3>
                                <p class="team-one__sub-title">{{ $member->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--Vounteers-->
    <section class="team-carousel-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Volunteers</span>
                <h2 class="section-title__title">Meet the team behind <br> their success story</h2>
            </div>
            <div class="team-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                data-owl-options='{
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

                @foreach ($volunteers as $volunteer)
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('storage') }}/{{$volunteer->image}}" alt="{{$volunteer->name}}">
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">{{$volunteer->name}}</a></h3>
                                <p class="team-one__sub-title">{{$volunteer->designation}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
