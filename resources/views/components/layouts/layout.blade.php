<!doctype html>
<html lang="en">

<head>
    {{-- <title>Aprendible - @yield('title')</title> --}}
    <title>Aprendible - {{ $title ?? '' }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="@yield('meta-description', 'Default meta description')"> --}}
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>

    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <!-- contenido de la pagina -->
    {{-- @include('partials.nav')

    @yield('content') --}}

    <x-layouts.nav />

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    {{ $slot }}


</body>

</html>
