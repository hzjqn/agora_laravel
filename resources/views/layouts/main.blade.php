<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agora
            @if(View::hasSection('title'))
            | @yield('title')
            @endif
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @include('_.navbar')
    @yield('content')    
</body>
</html>