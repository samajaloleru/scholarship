<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.min.css">
        <link rel="stylesheet" href="css/button.min.css">
        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script>tinymce.init({selector:'textarea'});</script>
    </head>
    <body>
        <div class="wrapper" id="app">
            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
            </div>
            
            @yield('content')
        </div>

        <!--   Core JS Files   -->
        <script src="{{ asset('js/bundle.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/button.min.js')}}" type="text/javascript"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180910402-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'UA-180910402-1');
        </script>
    </body>
</html>
