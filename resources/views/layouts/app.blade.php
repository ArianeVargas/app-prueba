<!doctype html>
<html lang="en">

    <title>Aprendible - @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('meta-description', 'Default meta description')">

    @vite(['resources/js/app.js', 'resources/css/app.scss'])

</head>

<body class="antialiased bg-slate-100 dark:bg-slate-900">
    <!-- contenido de la pagina -->
    @include('partials.nav')

    @yield('content')

</body>

</html>
