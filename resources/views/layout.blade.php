<!doctype html>
<html>
    <head>
        <title>@yield('title', 'Market')</title>
    </head>
    <body>

        <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About us</a></li>
        </ul>

        @yield('content')
    </body>
</html>