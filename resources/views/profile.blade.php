@extends('layouts.app')

@section('title', 'Profil Operator')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-sm border border-slate-200 text-center">
    <div class="w-20 h-20 bg-indigo-800 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">
        {{ strtoupper(substr($username, 0, 2)) }}
    </div>
    <h2 class="text-xl font-bold text-slate-800">{{ $username }}</h2>
    <p class="text-sm text-slate-500 mb-6">Operator Kasir PS Banyuwangi</p>

    <div class="border-t border-slate-100 pt-4 text-left space-y-3 text-sm">
        <div class="flex justify-between">
            <span class="text-slate-500">Username Kasir:</span>
            <span class="font-medium text-slate-800">{{ $username }}</span>
        </div>
        <div class="flex justify-between">
            <span class="text-slate-500">Otorisasi:</span>
            <span class="font-medium text-slate-800">Admin Utama</span>
        </div>
        <div class="flex justify-between">
            <span class="text-slate-500">Cabang Tugas:</span>
            <span class="font-medium text-slate-800">Banyuwangi Kota</span>
        </div>
    </div>
</div>
@endsection
