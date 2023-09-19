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

<body class="antialiased bg-slate-100 dark:bg-slate-900">
    <!-- contenido de la pagina -->
    {{-- @include('partials.nav')

    @yield('content') --}}

    <x-layouts.nav />
    @if (session('status'))
    <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{ session('status') }}
    </div>
    @endif

    {{ $slot }}


</body>

</html>
