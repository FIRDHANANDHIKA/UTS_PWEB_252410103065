@extends('layouts.app')

@section('title', 'Pengelolaan Unit PS')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <div>
            <h1 class="text-xl font-bold text-slate-800">🎮 Pengelolaan Unit PS Banyuwangi</h1>
            <p class="text-xs text-slate-500">Daftar konsol dan status rental aktif (Render Array via Controller)</p>
        </div>
        <span class="text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-200 px-3 py-1.5 rounded-full">
            Operator: {{ $username }}
        </span>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-100 text-slate-700 uppercase text-xs">
                <tr>
                    <th class="py-3 px-4">#</th>
                    <th class="py-3 px-4">Nama Station</th>
                    <th class="py-3 px-4">Tipe Konsol</th>
                    <th class="py-3 px-4">Tarif / Jam</th>
                    <th class="py-3 px-4">Cabang</th>
                    <th class="py-3 px-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($rentalUnits as $unit)
                <tr class="hover:bg-slate-50 transition">
                    <td class="py-3 px-4 font-medium text-slate-900">{{ $loop->iteration }}</td>
                    <td class="py-3 px-4 font-semibold text-slate-800">{{ $unit['station_name'] }}</td>
                    <td class="py-3 px-4">{{ $unit['type'] }}</td>
                    <td class="py-3 px-4 font-medium text-emerald-600">{{ $unit['rate'] }}</td>
                    <td class="py-3 px-4">{{ $unit['location'] }}</td>
                    <td class="py-3 px-4">
                        @if($unit['status'] == 'Tersedia')
                            <span class="px-2.5 py-1 text-xs rounded-full font-medium bg-emerald-100 text-emerald-700">
                                {{ $unit['status'] }}
                            </span>
                        @elseif($unit['status'] == 'Terpakai')
                            <span class="px-2.5 py-1 text-xs rounded-full font-medium bg-amber-100 text-amber-700">
                                {{ $unit['status'] }}
                            </span>
                        @else
                            <span class="px-2.5 py-1 text-xs rounded-full font-medium bg-rose-100 text-rose-700">
                                {{ $unit['status'] }}
                            </span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
