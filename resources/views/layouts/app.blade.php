<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'BoolBnB')</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @yield('head')
    </head>
    <body>
        <header>
            @include('layouts.partials.header')
        </header>
        <main>
            @yield('main-content')
        </main>
    </body>
</html>