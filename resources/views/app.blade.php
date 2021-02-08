<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>
    </head>
    <body>
        @yield('content')

        <footer>
            <p>
                &copy; copyright {{date('Y')}} 
                &middot; <a href="/about-us">About us</a>
            </p>
        </footer>
    </body>
</html>
