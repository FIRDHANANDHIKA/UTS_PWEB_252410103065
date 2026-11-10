<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BwiPlayStation')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex flex-col font-sans">
    @if(!request()->routeIs('login'))
        <x-navbar :username="request()->query('username', 'Guest')" />
    @endif

    <main class="container mx-auto px-4 py-8 flex-1">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
