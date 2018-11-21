<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('head-js')
    
    <title>Agora
            @if(View::hasSection('title'))
            | @yield('title')
            @endif
    </title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    @yield('head-css')
</head>
<body class="{{ View::hasSection('navbar') ? 'with-navbar' : null }} {{ View::hasSection('botbar') ? 'with-bottombar' : null }}">
    @if(View::hasSection('navbar'))
        @include('_.navbar')
    @endif
    @yield('content')
    @if(View::hasSection('botbar'))
        @include('_.bottombar')
    @endif
    
    <!-- Scripts -->
    <script src="{{ asset('js/solid.js') }}" defer></script>
    @yield('js');
</body>
</html>