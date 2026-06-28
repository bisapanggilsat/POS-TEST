<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    // 1. Fungsi buat nampilin halaman form input
    public function tampilkanForm() {
        return view('form_produk');
    }

    // 2. Fungsi buat menangkap data ketikan dari browser dan simpan ke MySQL
    public function simpanProduk(Request $request) {
        // Simpan ke database
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga
        ]);

        // Kalau sukses, balikin ke halaman form dengan pesan sukses
        return redirect()->back()->with('sukses', 'Mantap Sat! Produk berhasil disimpan ke MySQL.');
    }
}