<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RabController;



Route::get('/', function () {
    return view('dashboard'); 
});

Route::get('/rab', function () {
    return view('rab');
});

Route::get('/kontrak', function () {
    return view('kontrak');
});

Route::get('/logcustomer', function () {
    return view('logcustomer');
})->name('logcustomer');

Route::get('/dismantle', function () {
    return view('dismantle');
});

Route::get('/updatedata', function () {
    return view('updatedata');
});

Route::get('tambahdatarab', function () {
    return view('tambahdatarab');
})->name('tambahdatarab');

Route::post('/tambahdatarab', function (Request $request) {

    return redirect('/rab')->with('success', 'Data berhasil disimpan!');
});

Route::get('tambahdatakontrak', function () {
    return view('tambahdatakontrak'); 
})->name('tambahdatakontrak');

Route::post('/tambahdatakontrak', function (Request $request) {

    return redirect('/kontrak')->with('success', 'Data berhasil disimpan!');
});

Route::get('tambahlogcustomer', function () {
    return view('tambahlogcustomer'); 
})->name('tambahlogcustomer');

Route::post('/tambahlogcustomer', function (Request $request) {

    return redirect('/logcustomer')->with('success', 'Data berhasil disimpan!');
});

Route::get('/detailcustomer/{id}', function ($id) {
    // sementara data dummy (belum database)
    $customer = (object) [
        'kode_customer'     => 'CUST'.$id,
        'nama_customer'     => 'Jaya Jaya Jaya',
        'id_area'           => 'AREA-01',
        'no_telp'           => '08123456789',
        'email'             => 'jaya@example.com',
        'no_identitas'      => '1234567890',
        'status_rumah'      => 'Milik Sendiri',
        'paket'             => 'Internet 100Mbps',
        'biaya_bulanan'     => '500000',
        'biaya_instalasi'   => '250000',
    ];

    return view('detailcustomer', compact('customer'));
})->name('detailcustomer');

Route::view('/customer/{id}/detail', 'detailcustomer')->name('customer.detail');
Route::view('/customer/{id}/invoice', 'invoice')->name('customer.invoice');

Route::get('tambahdatadismantle', function () {
    return view('tambahdatadismantle'); 
})->name('tambahdatadismantle');

Route::post('/tambahdatadismantle', function (Request $request) {

    return redirect('/dismantle')->with('success', 'Data berhasil disimpan!');
});

Route::get('updatedatacustomer', function () {
    return view('updatedatacustomer'); 
})->name('updatedatacustomer');

Route::post('/updatedatacustomer', function (Request $request) {

    return redirect('/updatedata')->with('success', 'Data berhasil disimpan!');
});