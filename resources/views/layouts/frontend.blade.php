<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    @vite(['resources/css/frontend.css', 'resources/js/frontend.js'])
</head>
<body>

{{-- @include('frontend.partials.nav') --}}

<main>
    @yield('content')
</main>

{{-- @include('frontend.partials.footer') --}}

</body>
</html>
