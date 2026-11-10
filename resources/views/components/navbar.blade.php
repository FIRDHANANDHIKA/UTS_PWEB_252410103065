@props(['username' => 'Guest'])

<nav class="bg-indigo-900 text-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="font-bold text-xl tracking-wide flex items-center gap-2">
            🎮 <span>BwiPlayStation</span>
        </a>
        <div class="flex space-x-6 items-center">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-indigo-200 text-sm font-medium">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="hover:text-indigo-200 text-sm font-medium">Pengelolaan Unit</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="hover:text-indigo-200 text-sm font-medium">Profil ({{ $username }})</a>
            <a href="{{ route('login') }}" class="bg-rose-600 hover:bg-rose-700 px-3 py-1 rounded text-xs font-semibold transition">Logout</a>
        </div>
    </div>
</nav>
