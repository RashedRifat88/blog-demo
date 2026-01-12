<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

    {{-- @include('admin.partials.navbar')
    @include('admin.partials.sidebar') --}}

    <main class="app-main p-3">
        @yield('content')
    </main>

</div>
</body>
</html>
