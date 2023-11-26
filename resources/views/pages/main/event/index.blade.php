@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Events </title>
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
                    <li class="active">Events</li>
                </ul>
                <h2>Events</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Make Donation Start-->
    <section class="make-donation">
        <div class="container">
            <div class="make-donation__inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="make-donation__left">
                            <div class="make-donation__img">
                                <img src="{{asset('assets/main/images/resources/make-donation-img-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6">
                        <div class="make-donation__right">
                            <div class="make-donation__content">
                                <div class="make-donation__btn-box">
                                    <a href="donate-now.html" class="thm-btn make-donation__btn">Donate now</a>
                                </div>
                                <ul class="list-unstyled make-donation__meta">
                                    <li><a href="#"> <i class="fas fa-calendar-alt"></i> 45 Days Left</a></li>
                                    <li><a href="#"> <i class="fas fa-user"></i> 40+ Suppoters</a></li>
                                </ul>
                                <h3 class="make-donation__title">Contribute for the differently abled</h3>
                                <p class="make-donation__text">Proactively procrastinate cross-platform results via
                                    extensive ideas distinctively <br> underwhelm enterprise.</p>
                                <ul class="list-unstyled make-donation__raised-goal">
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-hand-paper"></i>
                                        </div>
                                        <div class="content">
                                            <p>Raised</p>
                                            <h4>$26.0000</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="dolar-icon-style">$</i>
                                        </div>
                                        <div class="content">
                                            <p>Raised</p>
                                            <h4>$26.0000</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Make Donation End-->

    <!--Events Page Start-->
    <section class="events-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Events One Single Start-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="{{asset('assets/main/images/events/events-page-1-1.jpg')}}" alt="">
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
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Events One Single Start-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="{{asset('assets/main/images/events/events-page-1-2.jpg')}}" alt="">
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
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Events One Single Start-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="{{asset('assets/main/images/events/events-page-1-3.jpg')}}" alt="">
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
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Events One Single Start-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="{{asset('assets/main/images/events/events-page-1-4.jpg')}}" alt="">
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
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Events One Single Start-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="{{asset('assets/main/images/events/events-page-1-5.jpg')}}" alt="">
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
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Events One Single Start-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="{{asset('assets/main/images/events/events-page-1-6.jpg')}}" alt="">
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
    </section>
    <!--Events Page End-->
@endsection