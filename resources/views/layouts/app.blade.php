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

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/" rel="preconnect">

    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <a class="dark_app btn-link" id="mode-btn" href="#">
        <img class="btn-image" id="mode-icon" src="{{ asset('assets/images/light.png') }}" style="width:42px">
    </a>

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
            <img class="btn-image" src="{{ asset('assets/images/chat.png') }}" style="width:50px">
        </a>
    @endif

    @include('partials.main.style')

    <link id="dark-css" href="{{ asset('assets/main/css/oxpins-dark.css') }}" rel="stylesheet" />

    @stack('main-style')
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

    @include('partials.main.script')

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

        if (window.localStorage.getItem("store_mode") == 'dark') {
            darkMode();
        } else {
            lightMode();
        }

        modeBtn.addEventListener('click', (e) => {
            e.preventDefault();

            if (window.localStorage.getItem("store_mode") == 'dark') {
                lightMode();
                window.localStorage.setItem("store_mode", 'light');
            } else {
                darkMode();
                window.localStorage.setItem("store_mode", 'dark');
            }
        })
    </script>

    @stack('main-script')

</body>

</html>
