@extends('layouts.app')

@section('title', 'Login Operator - PS Banyuwangi')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md border border-slate-200 mt-10">
    <div class="text-center mb-6">
        <span class="text-4xl">🎮</span>
        <h2 class="text-2xl font-bold text-slate-800 mt-2">Login Operator</h2>
        <p class="text-sm text-slate-500">Sistem Manajemen Rental PS Banyuwangi</p>
    </div>

    <!-- Alert jika password / login salah -->
    @if(session('error'))
        <div class="mb-4 p-3 text-sm bg-rose-100 border border-rose-300 text-rose-700 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="username" class="block text-sm font-medium text-slate-700 mb-1">Username / Nama Operator</label>
            <input type="text" id="username" name="username" required placeholder="Contoh: Ahmad_Bwi"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        </div>

        <!-- Tambahan Input Field Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
            <input type="password" id="password" name="password" required placeholder="Masukkan password"
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        </div>

        <button type="submit" class="w-full bg-indigo-700 hover:bg-indigo-800 text-white py-2.5 rounded-lg font-medium transition text-sm">
            Masuk ke Dashboard
        </button>
    </form>
</div>
@endsection
