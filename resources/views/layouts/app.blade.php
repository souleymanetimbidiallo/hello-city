<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{pagetitle($title ?? null)}}</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="py-6 flex flex-col items-center justify-between min-h-screen">
        <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
        </main>

        @include('layouts/partials/_footer');
    </body>
</html>
