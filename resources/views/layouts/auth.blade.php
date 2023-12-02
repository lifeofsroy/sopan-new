<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">

    @stack('auth-title')

    <link type="image/icon" href="{{ asset('assets/auth/images/favicon-16x16.html') }}" rel="shortcut icon" />

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link href="{{ asset('logo.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('manifest.json') }}" rel="manifest">

    <link href="{{ asset('assets/auth/css/login3-style.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
    <!-- Preloader -->
    <div id="preload-block">
        <div class="square-block"></div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @yield('auth-section')
        </div>
    </div>

    <script src="{{ asset('assets/auth/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/auth/js/custom.js') }}"></script>
    <script src="{{ asset('sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register('/sw.js')
                .then((reg) => {
                    console.log(reg);
                });
        }
    </script>
    @stack('auth-script')
</body>

</html>
