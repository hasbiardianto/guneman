<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="/img/logo-guneman.jpg" type="image/x-icon" class="rounded-full">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    @if (!Auth::user())
        @include('partials.navbar')
    @else
        @include('dashboard.partials.navbar')
    @endif
    <main class="mt-20">
        @yield('content')
    </main>
</body>

</html>
