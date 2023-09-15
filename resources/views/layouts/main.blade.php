<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guneman.id | Beranda</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.navbar')
    @yield('container')
    @include('partials.footer')
</body>

</html>