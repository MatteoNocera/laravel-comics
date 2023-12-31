<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/dc-logo.png') }}" />

    <title>DC @yield('page-title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>


    @include ('layouts.partials.header')
    @include ('layouts.partials.jumbotron')



    <main class="">
        @yield('content')
    </main>

    @include ('layouts.partials.footer')
</body>

</html>
