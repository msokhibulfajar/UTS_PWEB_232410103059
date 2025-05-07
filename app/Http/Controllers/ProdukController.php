<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
    public function edit($id)
    {
        $data = Session::get('produk', []);
        $produk = collect($data)->firstWhere('id', $id);

        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $data = Session::get('produk', []);

        $updatedData = collect($data)->map(function ($item) use ($id, $request) {
            if ($item['id'] == $id) {
                return [
                    'id' => $id,
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'stok' => $request->stok
                ];
            }
            return $item;
        })->toArray();

        Session::put('produk', $updatedData);

        return redirect()->route('pengelolaan')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data = Session::get('produk', []);
        $filteredData = array_filter($data, function ($item) use ($id) {
            return $item['id'] != $id;
        });

        Session::put('produk', array_values($filteredData));

        return redirect()->route('pengelolaan')->with('success', 'Produk berhasil dihapus!');
    }

    public function create()
    {
    return view('produk.create');
    }

    public function store(Request $request)
    {
    $data = Session::get('produk', []);

    $newId = count($data) > 0 ? max(array_column($data, 'id')) + 1 : 1;

    $newProduk = [
        'id' => $newId,
        'nama' => $request->nama,
        'harga' => $request->harga,
        'stok' => $request->stok
    ];

    $data[] = $newProduk;
    Session::put('produk', $data);

    return redirect()->route('pengelolaan')->with('success', 'Produk berhasil ditambahkan!');
    }
}
