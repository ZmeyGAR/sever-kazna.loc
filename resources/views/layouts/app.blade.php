<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/icons/favicons/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="/icons/favicons/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
    <link href="/icons/favicons/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="/icons/favicons/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="/icons/favicons/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="/icons/favicons/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="/icons/favicons/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="/icons/favicons/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
    <link href="/icons/favicons/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
    <link type="image/png" href="/icons/favicons/android-icon-192x192.png" rel="icon" sizes="192x192">
    <link type="image/png" href="/icons/favicons/favicon-32x32.png" rel="icon" sizes="32x32">
    <link type="image/png" href="/icons/favicons/favicon-96x96.png" rel="icon" sizes="96x96">
    <link type="image/png" href="/icons/favicons/favicon-16x16.png" rel="icon" sizes="16x16">
    <link href="/icons/favicons/manifest.json" rel="manifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link type="image/x-icon" href="/icons/favicons/favicon.ico" rel="shortcut icon">
    <link type="image/x-icon" href="/icons/favicons/favicon.ico" rel="icon">

    <title>@yield('meta.title', config('app.name'))</title>

    <link rel="stylesheet" href="/vendor/notification.min.css">
    <script src="/vendor/notification.min.js" defer></script>

    <link rel="stylesheet" href="/vendor/sweetalert.default.theme.min.css">
    <script src="/vendor/sweetalert2.all.js" defer></script>
    
    <link rel="stylesheet" href="/vendor/loading.min.css">
    <link rel="stylesheet" href="/vendor/lbbutton.min.css">

    {{-- @vite(['resources/css/notification.min.css', 'resources/js/notification.min.js']) --}}
    {{-- @vite(['resources/css/sweetalert.default.theme.min.css', 'resources/js/sweetalert2.all.js']) --}}
    {{-- @vite(['resources/css/loading.min.css', 'resources/css/lbbutton.min.css']) --}}
    @vite(['resources/scss/normalize.scss', 'resources/scss/app.scss'])
    @vite(['resources/js/app.js'])

</head>

<body>


    @include('sections.header')

    <main class="main">
        @yield('content')
    </main>

    @include('sections.footer')


</body>

</html>
