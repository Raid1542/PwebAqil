<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/', function () {
    return view('welcome');
});

// Tampilkan semua produk
Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.show');

// Simpan produk baru
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');

// Tampilkan form edit
Route::get('/listproduk/edit/{id}', [ListProdukController::class, 'edit'])->name('produk.edit');

// Update produk
Route::put('/listproduk/{id}', [ListProdukController::class, 'update'])->name('produk.update');

// Hapus produk
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');
