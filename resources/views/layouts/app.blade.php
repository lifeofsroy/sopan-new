<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('assets/main/images/favicons/site.webmanifest') }}" rel="manifest" />
    <link type="image/png" href="{{ asset('storage') }}/{{ $setting->favicon }}" rel="icon" sizes="32x32" />
    <meta name="description" content="{{ $setting->app_desc }}" />
    <meta name="Keywords" content="{{ $setting->app_keyw }}">

    @stack('title')

    @laravelPWA

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/" rel="preconnect">

    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('assets/main/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/animate/custom-animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/fontawesome/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/jarallax/jarallax.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/nouislider/nouislider.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/nouislider/nouislider.pips.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/odometer/odometer.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/swiper/swiper.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/oxpins-icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/vendors/tiny-slider/tiny-slider.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/reey-font/stylesheet.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/bxslider/jquery.bxslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/vegas/vegas.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/jquery-ui/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/vendors/timepicker/timePicker.css') }}" rel="stylesheet" />

    <!-- template styles -->
    <link href="{{ asset('assets/main/css/oxpins.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/css/oxpins-responsive.css') }}" rel="stylesheet" />
    <link id="dark-css" href="{{ asset('assets/main/css/oxpins-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/main/css/plugin.css') }}" rel="stylesheet" />

    <p class="dark_app btn-link" id="mode-btn" href="#" role="button">
        <img class="btn-image" id="mode-icon" src="{{ asset('assets/images/light.png') }}" style="width:42px">
    </p>

    @if ($plugin->is_phone)
        <a class="ph-float btn-link" href="tel:91{{ $plugin->phone_no }}" target="_blank">
            <img class="btn-image" src="{{ asset('assets/images/phone.png') }}" style="width:42px">
        </a>
    @endif

    @if ($plugin->is_whatsapp && !$plugin->is_tawk)
        <a class="wh-float btn-link" href="https://api.whatsapp.com/send?phone=91{{ $plugin->whatsapp_no }}" ."="" target="_blank">
            <img class="btn-image" src="{{ asset('assets/images/whatsapp.png') }}" style="width:50px">
        </a>
    @endif

    @if ($plugin->is_tawk && !$plugin->is_whatsapp)
        <a class="wh-float" href="javascript:void(Tawk_API.toggle())">
            <img class="btn-image" src="{{ asset('assets/images/chat.gif') }}" style="width:50px">
        </a>
    @endif

    @stack('main-style')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- /.preloader -->
    <div class="preloader" style="background-color: #8f8e8e;">
        <div class="preloader__image" style="background-image: url({{ asset('storage') }}/{{ $setting->preloader }});"></div>
    </div>

    <div class="page-wrapper">
        @include('partials.main.header')

        @yield('main-section')

        @include('partials.main.footer')

    </div><!-- /.page-wrapper -->

    @include('partials.main.mobile')

    @include('partials.main.search')

    <a class="scroll-to-target scroll-to-top" data-target="html" href="#"><i class="icon-up-arrow"></i></a>

    <script src="{{ asset('assets/main/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/main/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assets/main/js/oxpins.js') }}"></script>


    @if ($plugin->is_tawk && !$plugin->is_whatsapp)
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = '{{ $plugin->tawk_src }}';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    @endif

    <script>
        let modeBtn = document.querySelector('#mode-btn');
        let modeIcon = document.querySelector('#mode-icon');
        let darkCss = document.querySelector('#dark-css');

        function darkMode() {
            darkCss.setAttribute("href", "{{ asset('assets/main/css/oxpins-dark.css') }}");
            modeIcon.setAttribute("src", "{{ asset('assets/images/light.png') }}");
        }

        function lightMode() {
            darkCss.removeAttribute("href");
            modeIcon.setAttribute("src", "{{ asset('assets/images/dark.png') }}");
        }

        if (window.localStorage.getItem("store_mode") == 'light') {
            lightMode();
        } else {
            darkMode();
        }

        modeBtn.addEventListener('mouseover', () => {
            if (window.localStorage.getItem("store_mode") == 'light') {
                modeIcon.setAttribute("src", "{{ asset('assets/images/dark.gif') }}");
            } else {
                modeIcon.setAttribute("src", "{{ asset('assets/images/light.gif') }}");
            }
        });

        modeBtn.addEventListener('mouseout', (e) => {
            if (window.localStorage.getItem("store_mode") == 'light') {
                modeIcon.setAttribute("src", "{{ asset('assets/images/dark.png') }}");
            } else {
                modeIcon.setAttribute("src", "{{ asset('assets/images/light.png') }}");
            }
        });

        modeBtn.addEventListener('click', (e) => {
            e.preventDefault();

            if (window.localStorage.getItem("store_mode") == 'light') {
                darkMode();
                window.localStorage.setItem("store_mode", 'dark');
            } else {
                lightMode();
                window.localStorage.setItem("store_mode", 'light');
            }
        });
    </script>

    @stack('main-script')

</body>

</html>
