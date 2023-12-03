@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Contact Us </title>
@endpush

@section('main-section')
    <!--Page Header Start-->
    <x-main.breadcrumb-section title="Contact Us" link="Contacts" />

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="contact-three-shape" style="background-image: url({{ asset('assets/main/images/shapes/contact-three-shape.png') }});"></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Contact with us</span>
                <h2 class="section-title__title">Feel free to write us <br> anytime</h2>
            </div>
            <div class="comment-form">
                <form action="https://layerdrops.com/oxpinshtml/main-html/assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="text" placeholder="Your name" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="email" placeholder="Email address" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="text" placeholder="Your name" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="email" placeholder="Email address" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="comment-form__input-box text-message-box">
                                <textarea name="message" placeholder="Write a message"></textarea>
                            </div>
                            <div class="comment-form__btn-box">
                                <button type="submit" class="thm-btn contact-form__btn">Send a message</button>
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

    <div class="comment-form__input-box text-message-box mt-4 px-4">
        <textarea name="message" placeholder="{{ $contact->route }}" style="font-size: 30px; font-weight: 800; color: #067559; background-color: #cfcfcd00;"></textarea>
    </div>
@endsection
