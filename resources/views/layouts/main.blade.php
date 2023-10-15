<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-91VRBDCS3V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-91VRBDCS3V');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guneman | {{ $title }}</title>
    <link rel="shortcut icon" href="img/logo-guneman.jpg" type="image/x-icon" class="rounded-full">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.navbar')
    @yield('container')
    @include('partials.footer')
</body>

</html>