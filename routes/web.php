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

Route::get('/customercomplaint', function () {
    return view('customer_complaint');
});
Route::get('/tambah-data-customer_complaint', function () {
    return view('tambah_data_customer_complaint'); // ganti dengan nama file blade yang benar
})->name('tambah_data_customer_complaint');
Route::post('/tambah-data-customer_complaint', function (Request $request) {
    // untuk debug, tampilkan data dulu
    // dd($request->all())

    return redirect('/customercomplaint')->with('success', 'Data berhasil disimpan!');
});

Route::get('/customerrequest', function () {
    return view('customer_request');
});
Route::get('/tambah-data-customer_request', function () {
    return view('tambah_data_customer_request'); // ganti dengan nama file blade yang benar
})->name('tambah_data_customer_request');
Route::post('/tambah-data-customer_request', function (Request $request) {
    // untuk debug, tampilkan data dulu
    // dd($request->all())

    return redirect('/customerrequest')->with('success', 'Data berhasil disimpan!');
});

Route::get('/customervisit', function () {
    return view('customer_visit');
});
Route::get('/tambah-data-customer_visit', function () {
    return view('tambah_data_customer_visit'); // ganti dengan nama file blade yang benar
})->name('tambah_data_customer_visit');
Route::post('/tambah-data-customer_visit', function (Request $request) {
    // untuk debug, tampilkan data dulu
    // dd($request->all())

    return redirect('/customervisit')->with('success', 'Data berhasil disimpan!');
});

Route::get('/kepuasanpelanggan', function () {
    return view('kepuasan_pelanggan');
});
Route::get('/tambah-data-kepuasan_pealnggan', function () {
    return view('tambah_data_kepuasan_pelanggan'); // ganti dengan nama file blade yang benar
})->name('tambah_data_kepuasan_pelanggan');
Route::post('/tambah-data-kepuasan_pelanggan', function (Request $request) {
    // untuk debug, tampilkan data dulu
    // dd($request->all())

    return redirect('/kepuasanpelanggan')->with('success', 'Data berhasil disimpan!');
});

