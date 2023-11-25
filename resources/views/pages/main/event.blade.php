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