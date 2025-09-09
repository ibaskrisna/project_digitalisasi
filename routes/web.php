<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard'); 
});

Route::get('/rab', function () {
    return view('rab');
});

Route::get('/kontrak', function () {
    return view('kontak');
});

Route::get('/prospekpelangganbaru', function () {
    return view('prospek_pelanggan_baru');
});

Route::get('/closingpenjualan', function () {
    return view('closing_penjualan');
});

Route::get('/followuppelangganaktif', function () {
    return view('follow_up_pelanggan_aktif');
});

Route::get('/laporanpenjualan', function () {
    return view('laporan_penjualan');
});

