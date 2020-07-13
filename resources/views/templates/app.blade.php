<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    @yield('css')
</head>
<body>
    <header>
        <div>
            <p>header</p>        
        </div>
    </header>
    @yield('body')
    <footer>
        <div>
            <p>Copyright 2020 INFO TECH SERVICES. All rights reserved</p>
        </div>
    </footer>
</body>
</html>