<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/kasir-monolith', function () {
    // Ini BACKEND (Menyiapkan data dari database/gudang)
    $namaKasir = "Satria";
    $totalTransaksi = 150000;

    // Ini menghubungkan BE ke FE (Data dikirim ke file HTML/Blade)
    return view('halaman_kasir', [
        'kasir' => $namaKasir,
        'total' => $totalTransaksi
    ]);
});

// URL buat buka form
Route::get('/produk/tambah', [ProdukController::class, 'tampilkanForm']);

// URL buat memproses kiriman data dari form (pake POST)
Route::post('/produk/simpan', [ProdukController::class, 'simpanProduk'])->name('produk.simpan');