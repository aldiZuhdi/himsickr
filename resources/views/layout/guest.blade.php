<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('logo/himsi.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('page_css')
</head>
<body>
    @include('components.guest.header')
    <div class="w-100">
        @yield('content')
    </div>
    @include('components.guest.footer')
    @yield('page_js')
</body>
</html>