<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer-bg" style="background-image: url({{ asset('assets/main/images/backgrounds/site-footer-bg.jpg') }});">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__about-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('storage') }}/{{ $setting->logo }}" alt="{{ $setting->app_name }}"
                                    width="200px"></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">{{ $setting->app_desc }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Pages</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li>
                                <a href="{{ route('home') }}" style="{{ Route::is('home') ? 'color: #fff;' : '' }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" style="{{ Route::is('about*') ? 'color: #fff;' : '' }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('project') }}" style="{{ Route::is('project*') ? 'color: #fff;' : '' }}">Projects</a>
                            </li>
                            <li>
                                <a href="{{ route('event') }}" style="{{ Route::is('event*') ? 'color: #fff;' : '' }}">Events</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}" style="{{ Route::is('news*') ? 'color: #fff;' : '' }}">News</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__non-profit clearfix">
                        <h3 class="footer-widget__title">Useful Links</h3>
                        <ul class="footer-widget__non-profit-list list-unstyled clearfix">
                            <li>
                                <a href="{{ route('volunteer') }}" style="{{ Route::is('volunteer') ? 'color: #fff;' : '' }}">Join Us</a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}" style="{{ Route::is('faq') ? 'color: #fff;' : '' }}">FAQs</a>
                            </li>
                            <li>
                                <a href="{{ route('gallery') }}" style="{{ Route::is('gallery') ? 'color: #fff;' : '' }}">Photo Gallery</a>
                            </li>
                            <li>
                                <a href="{{ route('policy.privacy') }}" style="{{ Route::is('policy.privacy') ? 'color: #fff;' : '' }}">Our Policies</a>
                            </li>
                            <li>
                                <a href="{{ route('term') }}" style="{{ Route::is('term') ? 'color: #fff;' : '' }}">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">Contact Us</h3>
                        <p class="footer-widget__contact-text">{{ $contact->address }}
                        </p>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:{{ explode(',', $contact->email)[0] }}">{{ explode(',', $contact->email)[0] }}</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:{{ explode(',', $contact->phone)[0] }}">{{ explode(',', $contact->phone)[0] }}</a></p>
                                </div>
                            </li>
                        </ul>
                        <div class="site-footer__social">
                            @foreach ($socials as $social)
                                <a href="{{ $social->url }}" target="_blank"><i class="{{ $social->icon }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">&copy; {{ date('Y') }} All Rights Reserved by <a
                                href="{{route('home')}}">{{ $setting->app_name }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
