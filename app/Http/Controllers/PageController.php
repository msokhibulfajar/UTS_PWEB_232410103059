<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $produk = [
        ['id' => 1, 'nama' => 'Bibit Padi Unggul', 'harga' => 25000, 'stok' => 150],
        ['id' => 2, 'nama' => 'Pupuk Organik 5kg', 'harga' => 75000, 'stok' => 80],
        ['id' => 3, 'nama' => 'Pestisida Nabati', 'harga' => 45000, 'stok' => 60],
        ['id' => 4, 'nama' => 'Alat Semprot Manual', 'harga' => 120000, 'stok' => 30],
        ['id' => 5, 'nama' => 'Benih Jagung Hibrida', 'harga' => 35000, 'stok' => 200],
        ['id' => 6, 'nama' => 'Polybag 30x30cm', 'harga' => 1500, 'stok' => 500],
        ['id' => 7, 'nama' => 'Vitamin Tanaman', 'harga' => 30000, 'stok' => 120],
    ];
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
{
    $username = $request->query('username');

    // Data produk agribisnis
    $dataProduk = [
        ['id' => 1, 'nama' => 'Bibit Padi Unggul', 'harga' => 25000, 'stok' => 150],
        ['id' => 2, 'nama' => 'Pupuk Organik 5kg', 'harga' => 75000, 'stok' => 80],
        ['id' => 3, 'nama' => 'Pestisida Nabati', 'harga' => 45000, 'stok' => 60],
        ['id' => 4, 'nama' => 'Alat Semprot Manual', 'harga' => 120000, 'stok' => 30],
        ['id' => 5, 'nama' => 'Benih Jagung Hibrida', 'harga' => 35000, 'stok' => 200],
        ['id' => 6, 'nama' => 'Polybag 30x30cm', 'harga' => 1500, 'stok' => 500],
        ['id' => 7, 'nama' => 'Vitamin Tanaman', 'harga' => 30000, 'stok' => 120],
    ];

    $totalProduk = count($dataProduk);
    $totalStok = array_sum(array_column($dataProduk, 'stok'));

    return view('dashboard', compact('username', 'totalProduk', 'totalStok'));
}

public function pengelolaan(Request $request)
{
    $username = $request->query('username');

    // Initialize session data if empty
    if (!Session::has('produk')) {
        Session::put('produk', [
            ['id' => 1, 'nama' => 'Bibit Padi Unggul', 'harga' => 25000, 'stok' => 150],
            ['id' => 2, 'nama' => 'Pupuk Organik 5kg', 'harga' => 75000, 'stok' => 80],
            ['id' => 3, 'nama' => 'Pestisida Nabati', 'harga' => 45000, 'stok' => 60],
            ['id' => 4, 'nama' => 'Alat Semprot Manual', 'harga' => 120000, 'stok' => 30],
            ['id' => 5, 'nama' => 'Benih Jagung Hibrida', 'harga' => 35000, 'stok' => 200],
        ]);
    }

    $data = Session::get('produk');

    return view('pengelolaan', [
        'data' => $data,
        'username' => $username,
        'totalProduk' => count($data),
        'totalStok' => array_sum(array_column($data, 'stok'))
    ]);
}

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
