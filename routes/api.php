<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/kasir-api', function () {
    return response()->json([
        'status' => 'success',
        'nama_kasir' => 'Satria Putra',
        'gudang' => 'Hive Indonesia',
        'total_transaksi' => 150000
    ]);
});