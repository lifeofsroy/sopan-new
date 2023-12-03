<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{route('home')}}" aria-label="logo image"><img src="{{ asset('storage') }}/{{ $setting->logo }}" alt="{{ $setting->app_name }}"
                    width="143" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{ explode(',', $contact->email)[0] }}">{{ explode(',', $contact->email)[0] }}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{ explode(',', $contact->phone)[0] }}">{{ explode(',', $contact->phone)[0] }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social mt-3">
                @foreach ($socials as $social)
                    <a class="{{ $social->icon }}" href="{{ $social->url }}"></a>
                @endforeach
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
