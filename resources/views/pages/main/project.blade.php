@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Projects </title>
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
                    <li class="active">Donations list</li>
                </ul>
                <h2>Donations list</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Donations List Start-->
    <section class="donations-list">
        <div class="container">
            <div class="donations-list__inner">
                <!--Donations List Single Start-->
                <div class="donations-list__single">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{asset('assets/main/images/resources/donations-list-img-1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Education</p>
                                    </div>
                                    <h3 class="donations-list__title"><a href="donation-details.html">Let’s
                                            education for children get good life</a></h3>
                                    <p class="donations-list__text">There are many of lorem, but majori have
                                        suffered alteration in some form. Et ligula ullamcorper malesuada proin
                                        libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse
                                        platea.</p>
                                    <div class="donations-list__progress">
                                        <div class="donations-list__progress-shape"
                                            style="background-image: url({{asset('assets/main/images/shapes/donations-list-progress-shape-1.png')}});">
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
                    </div>
                </div>
                <!--Donations List Single End-->
                <!--Donations List Single Start-->
                <div class="donations-list__single">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{asset('assets/main/images/resources/donations-list-img-2.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Medical</p>
                                    </div>
                                    <h3 class="donations-list__title"><a href="donation-details.html">A Little Help
                                            can Heal their
                                            Pains</a></h3>
                                    <p class="donations-list__text">There are many of lorem, but majori have
                                        suffered alteration in some form. Et ligula ullamcorper malesuada proin
                                        libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse
                                        platea.</p>
                                    <div class="donations-list__progress">
                                        <div class="donations-list__progress-shape"
                                            style="background-image: url({{asset('assets/main/images/shapes/donations-list-progress-shape-1.png')}});">
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
                    </div>
                </div>
                <!--Donations List Single End-->
                <!--Donations List Single Start-->
                <div class="donations-list__single">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{asset('assets/main/images/resources/donations-list-img-3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Food</p>
                                    </div>
                                    <h3 class="donations-list__title"><a href="donation-details.html">Raise Fund for
                                            Clean &Healthy
                                            Food</a></h3>
                                    <p class="donations-list__text">There are many of lorem, but majori have
                                        suffered alteration in some form. Et ligula ullamcorper malesuada proin
                                        libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse
                                        platea.</p>
                                    <div class="donations-list__progress">
                                        <div class="donations-list__progress-shape"
                                            style="background-image: url({{asset('assets/main/images/shapes/donations-list-progress-shape-1.png')}});">
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
                    </div>
                </div>
                <!--Donations List Single End-->
                <!--Donations List Single Start-->
                <div class="donations-list__single">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{asset('assets/main/images/resources/donations-list-img-4.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Medical</p>
                                    </div>
                                    <h3 class="donations-list__title"><a href="donation-details.html">Give African
                                            Child a Good
                                            Education</a></h3>
                                    <p class="donations-list__text">There are many of lorem, but majori have
                                        suffered alteration in some form. Et ligula ullamcorper malesuada proin
                                        libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse
                                        platea.</p>
                                    <div class="donations-list__progress">
                                        <div class="donations-list__progress-shape"
                                            style="background-image: url({{asset('assets/main/images/shapes/donations-list-progress-shape-1.png')}});">
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
                    </div>
                </div>
                <!--Donations List Single End-->
                <!--Donations List Single Start-->
                <div class="donations-list__single">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{asset('assets/main/images/resources/donations-list-img-5.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Food</p>
                                    </div>
                                    <h3 class="donations-list__title"><a href="donation-details.html">Let’s
                                            education for children get good life</a></h3>
                                    <p class="donations-list__text">There are many of lorem, but majori have
                                        suffered alteration in some form. Et ligula ullamcorper malesuada proin
                                        libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse
                                        platea.</p>
                                    <div class="donations-list__progress">
                                        <div class="donations-list__progress-shape"
                                            style="background-image: url({{asset('assets/main/images/shapes/donations-list-progress-shape-1.png')}});">
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
                    </div>
                </div>
                <!--Donations List Single End-->
            </div>
        </div>
    </section>
    <!--Donations List End-->
@endsection