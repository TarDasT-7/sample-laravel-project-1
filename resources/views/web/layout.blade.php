<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @include('./web/assets/_styles')
    @include('./web/assets/_seo')

</head>

<body class="">
    @include('./web/assets/_scroll-top')
    @include('./web/assets/_navbar')
    @include('./web/assets/_alert')
    @include('./web/assets/_cart')
    @yield('content')
    @include('./web/assets/_scripts')
    @include('./web/assets/_footer')
</body>

</html>
