<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // 1. Tampilkan Halaman Login
    public function showLogin()
    {
        return view('login');
    }

    // 2. Olah Form Login (Username + Password) & Kirim Parameter Username
    public function processLogin(Request $request)
    {
        // Validasi bahwa username dan password wajib diisi
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username', 'Kasir Rental');

        // Mengarahkan ke dashboard dengan membawa parameter username
        return redirect()->route('dashboard', ['username' => $username]);
    }

    // 3. Tampilkan Dashboard
    public function showDashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    // 4. Tampilkan Pengelolaan Data (Array Dinamis Rental PS Banyuwangi)
    public function showPengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        // Data Array dari Controller
        $rentalUnits = [
            [
                'id' => 1,
                'station_name' => 'Station 01 - VIP Room',
                'type' => 'PlayStation 5 (TV 55" 4K)',
                'rate' => 'Rp 20.000 / Jam',
                'location' => 'Cabang Kota Banyuwangi',
                'status' => 'Tersedia'
            ],
            [
                'id' => 2,
                'station_name' => 'Station 02 - Regular',
                'type' => 'PlayStation 4 Pro (TV 43")',
                'rate' => 'Rp 12.000 / Jam',
                'location' => 'Cabang Kota Banyuwangi',
                'status' => 'Terpakai'
            ],
            [
                'id' => 3,
                'station_name' => 'Station 03 - Racing Rig',
                'type' => 'PS5 + Steering Wheel G29',
                'rate' => 'Rp 35.000 / Jam',
                'location' => 'Cabang Rogojampi',
                'status' => 'Tersedia'
            ],
            [
                'id' => 4,
                'station_name' => 'Station 04 - Outdoor',
                'type' => 'PlayStation 4 Slim',
                'rate' => 'Rp 10.000 / Jam',
                'location' => 'Cabang Genteng',
                'status' => 'Maintenance'
            ],
            [
                'id' => 5,
                'station_name' => 'Station 05 - VIP Room',
                'type' => 'PlayStation 5 Pro',
                'rate' => 'Rp 25.000 / Jam',
                'location' => 'Cabang Kota Banyuwangi',
                'status' => 'Tersedia'
            ],
        ];

        return view('pengelolaan', compact('username', 'rentalUnits'));
    }

    // 5. Tampilkan Profile
    public function showProfile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}
