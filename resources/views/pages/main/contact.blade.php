@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Contact Us </title>
@endpush

@section('main-section')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/main/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Contact</li>
                </ul>
                <h2>Contact us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="contact-three-shape" style="background-image: url({{ asset('assets/main/images/shapes/contact-three-shape.png') }});"></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Contact with us</span>
                <h2 class="section-title__title">Feel free to write us <br> anytime</h2>
            </div>
            <div class="contact-page__form-box">
                <form class="contact-page__form contact-form-validated" action="#" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input name="name" type="text" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input name="email" type="email" placeholder="Email address">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input name="subject" type="text" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form__input-box text-message-box">
                                <textarea name="message" placeholder="Write a message"></textarea>
                            </div>
                            <div class="contact-form__btn-box">
                                <button class="thm-btn contact-form__btn" type="submit">Send a message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Contact Three End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="contact-one__inne">
                <ul class="list-unstyled contact-one__list">
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="contact-one__content">
                            <p class="contact-one__sub-title">Helpline</p>
                            <h3 class="contact-one__number">
                                @foreach (explode(',', $contact->phone) as $phone)
                                    <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                    <br />
                                @endforeach
                            </h3>
                        </div>
                    </li>
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-message"></span>
                        </div>
                        <div class="contact-one__content">
                            <p class="contact-one__sub-title">Send email</p>
                            <h3 class="contact-one__number">
                                @foreach (explode(',', $contact->email) as $email)
                                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                                    <br />
                                @endforeach
                            </h3>
                        </div>
                    </li>
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="contact-one__content">
                            <p class="contact-one__sub-title">Meet Us at</p>
                            <h3 class="contact-one__number">{{ $contact->address }}</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Google Map Start-->
    <section class="google-map google-map-two">
        <iframe class="google-map__one" src="{{ $contact->mapurl }}" allowfullscreen></iframe>
    </section>
    <!--Google Map End-->
@endsection
