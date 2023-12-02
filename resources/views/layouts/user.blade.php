<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="id" content="{{ $id }}">
    <link href='https://unpkg.com/nprogress@0.2.0/nprogress.css' rel='stylesheet' />
    <meta name="url" data-user="{{ Auth::user()->id }}" content="{{ url('') . '/user/chat' }}">

    <link href="https://fonts.gstatic.com/" rel="preconnect">
    <link href="{{ asset('assets/admin/img/icons/icon-48x48.png') }}" rel="shortcut icon" />

    <title>{{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('assets/admin/css/light.css') }}" rel="stylesheet">

    <style>
        body {
            opacity: 0;
        }
    </style>
    @stack('user-style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        <nav class="sidebar js-sidebar" id="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class='sidebar-brand' href='index.html'>
                    <span class="sidebar-brand-text align-middle">
                        {{ config('app.name') }}
                    </span>
                    <svg class="sidebar-brand-icon align-middle" style="margin-left: -3px" width="32px" height="32px" viewBox="0 0 24 24"
                        fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF">
                        <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                        <path d="M20 12L12 16L4 12"></path>
                        <path d="M20 16L12 20L4 16"></path>
                    </svg>
                </a>

                @include('partials.user.user-sidebar')
            </div>
        </nav>

        <div class="main">
            @include('partials.user.user-navbar')

            @yield('user-section')
        </div>
    </div>

    <script src="{{ asset('assets/admin/js/app.js') }}"></script>

    <script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>
    <script>
        // Gloabl Chatify variables from PHP to JS
        window.chatify = {
            name: "Jaugram Sopan",
            sounds: {
                "enabled": true,
                "public_path": "sounds\/chatify",
                "new_message": "new-message-sound.mp3"
            },
            allowedImages: ["png", "jpg", "jpeg", "gif"],
            allowedFiles: ["zip", "rar", "txt"],
            maxUploadSize: 1048576,
            pusher: {
                "debug": true,
                "key": "40897b27d5b05fd8aa79",
                "secret": "c7fef6b0df29bcfe63ca",
                "app_id": "1718465",
                "options": {
                    "cluster": "ap2",
                    "host": "api-ap2.pusher.com",
                    "port": "443",
                    "scheme": "https",
                    "encrypted": true,
                    "useTLS": true
                }
            },
            pusherAuthEndpoint: '{{route('user.chat.pusher.auth')}}'
        };
        window.chatify.allAllowedExtensions = chatify.allowedImages.concat(chatify.allowedFiles);
    </script>
    <script src="http://127.0.0.1:8000/js/chatify/utils.js"></script>
    <script src="http://127.0.0.1:8000/js/chatify/code.js"></script>

    @stack('user-script')
</body>

</html>
