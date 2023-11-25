<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="index.html"><img src="{{ asset('storage') }}/{{ $setting->logo }}" alt=""></a>
                    </div>
                    <div class="main-menu__shape-1 float-bob-x">
                        <img src="{{ asset('assets/main/images/shapes/main-menu-shape-1.png') }}" alt="">
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__right-top">
                        <div class="main-menu__right-top-left">
                            <div class="main-menu__volunteers">
                                <div class="main-menu__volunteers-icon">
                                    <img src="{{ asset('assets/main/images/icon/main-menu-heart-icon.png') }}" alt="">
                                </div>
                                <div class="main-menu__volunteers-text-box">
                                    <p class="main-menu__volunteers-text"><a href="{{route('volunteer')}}">Become
                                            a <span class="text-primary">volunteers</span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__right-top-right">
                            <div class="main-menu__right-top-address">
                                <ul class="list-unstyled main-menu__right-top-address-list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="content">
                                            <p>Helpline</p>
                                            <h5><a href="tel:980009630">+ 98 (000) - 9630</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="content">
                                            <p>Send email</p>
                                            <h5><a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="content">
                                            <p>380 St Kilda Road</p>
                                            <h5>Melbourne, Australia</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__right-top-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu__right-bottom">
                        <div class="main-menu__main-menu-box">
                            <a class="mobile-nav__toggler" href="#"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="{{Route::is('home') ? 'current' : ''}}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="{{Route::is('about') ? 'current' : ''}}">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="{{Route::is('project') ? 'current' : ''}}">
                                    <a href="{{ route('project') }}">Projects</a>
                                </li>
                                <li class="{{Route::is('event') ? 'current' : ''}}">
                                    <a href="{{ route('event') }}">Events</a>
                                </li>
                                <li class="{{Route::is('news') ? 'current' : ''}}">
                                    <a href="{{ route('news') }}">News</a>
                                </li>
                                <li class="{{Route::is('contact') ? 'current' : ''}}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li>
                                    <a href="{{route('login')}}" style="color: aquamarine">My Account</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__main-menu-content-box">
                            <div class="main-menu__search-cat-btn-box">
                                <div class="main-menu__search-box me-4">
                                    <a class="main-menu__search search-toggler icon-magnifying-glass" href="#"></a>
                                </div>
                                
                                <div class="main-menu__btn-box">
                                    <a class="main-menu__btn" href="{{route('donate')}}"> <span class="fa fa-heart"></span> Donate
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
