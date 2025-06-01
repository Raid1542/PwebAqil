<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
    {
        $data = Produk::all();
        $nama = $data->pluck('nama')->toArray();
        $desc = $data->pluck('deskripsi')->toArray();
        $harga = $data->pluck('harga')->toArray();
        $id = $data->pluck('id')->toArray();

        return view('list_produk', compact('nama', 'desc', 'harga', 'id'));
    }

    public function simpan(Request $request)
    {
        Produk::create($request->only('nama', 'deskripsi', 'harga'));

        return redirect()->route('produk.show')->with('success', 'Produk berhasil disimpan!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('edit_produk', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update($request->only('nama', 'deskripsi', 'harga'));

        return redirect()->route('produk.show')->with('success', 'Produk berhasil diperbarui!');
    }

    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.show')->with('success', 'Produk berhasil dihapus!');
    }
}
