<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guneman.id</title>
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