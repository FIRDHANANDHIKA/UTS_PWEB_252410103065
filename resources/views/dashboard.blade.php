@extends('layouts.app')

@section('title', 'Dashboard Operator')

@section('content')
<div class="space-y-6">
    <div class="bg-indigo-50 border-l-4 border-indigo-700 p-6 rounded-r-lg shadow-sm">
        <h1 class="text-2xl font-bold text-slate-800">Selamat Datang, {{ $username }}! 👋</h1>
        <p class="text-slate-600 mt-1">Sistem Informasi Pengelolaan Rental PlayStation Wilayah Banyuwangi.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <h3 class="text-sm font-medium text-slate-500">Total Unit PS</h3>
            <p class="text-3xl font-bold text-indigo-700 mt-2">5 Station</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <h3 class="text-sm font-medium text-slate-500">Total Cabang</h3>
            <p class="text-3xl font-bold text-emerald-600 mt-2">3 Cabang</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <h3 class="text-sm font-medium text-slate-500">Status Database</h3>
            <p class="text-3xl font-bold text-blue-600 mt-2">Dinamis Array</p>
        </div>
    </div>
</div>
@endsection
