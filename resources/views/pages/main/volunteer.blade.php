@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Join Us </title>
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
                <h2>Become a volunteer</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Become Volunteer Page Start-->
    <section class="become-volunteer-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Register yourself with us</span>
                <h2 class="section-title__title">Let's join our community to <br> become a volunteer</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer-page__left">
                        <div class="become-volunteer-page__img">
                            <img src="{{asset('assets/main/images/team/become-volunteer-img-1.jpg')}}" alt="">
                        </div>
                        <div class="become-volunteer-page__content">
                            <h3 class="become-volunteer-page__title">Requirements</h3>
                            <p class="become-volunteer-page__text">Aliquam hendrerit a augue insu image pellentes
                                que id erat quis sollicitud null mattis Ipsum is simply dummy typesetting industry.
                                Alienum phaedrum torquatos nec eu.</p>
                            <ul class="list-unstyled become-volunteer__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Making this first true generator simply text</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Lorem Ipsum is not simply free text</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="become-volunteer__call">
                            <div class="become-volunteer__call-icon">
                                <span class="icon-chat"></span>
                            </div>
                            <div class="become-volunteer__call-content">
                                <span>Call Anytime</span>
                                <p><a href="tel:980009630">+98 (000) - 9630</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer-page__right">
                        <form class="become-volunteer-page__form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="become-volunteer-page__input">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Address" name="Address">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Date of Birth" name="date" id="datepicker">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Occupation" name="Occupation">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input become-volunteer__message-box">
                                        <textarea name="message" placeholder="Write a Comment"></textarea>
                                    </div>
                                    <div class="become-volunteer-page__btn-box">
                                        <button type="submit" class="thm-btn become-volunteer-page__btn">Send a
                                            message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer Page End-->
@endsection