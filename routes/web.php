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

// Halaman troubleshoot
Route::get('/troubleshoot', function () {
    return view('troubleshoot');
});
Route::get('/tambah-data-ts', function () {
    return view('tambah_data_ts');
})->name('tambah_data_ts');
Route::post('/tambah-data-ts', function (Request $request) {
    return redirect('/troubleshoot')->with('success', 'Data berhasil disimpan!');
});

// Halaman Maintenance
Route::get('/maintenance', function () {
    return view('maintenance');
});
Route::get('/tambah-data-maintenance', function () {
    return view('tambah_data_maintenance');
})->name('tambah_data_maintenance');
Route::post('/tambah-data-maintenance', function (Request $request) {
    return redirect('/maintenance')->with('success', 'Data berhasil disimpan!');
});

// Halaman Survey
Route::get('/survey', function () {
    return view('survey');
});
Route::get('/tambah-data-survey', function () {
    return view('tambah_data_survey');
})->name('tambah_data_survey');
Route::post('/tambah-data-survey', function (Request $request) {
    return redirect('/survey')->with('success', 'Data berhasil disimpan!');
});

// Halaman Log Survey
Route::get('/logsurvey', function () {
    return view('log_survey');
});
Route::get('/tambah-data-logsurvey', function () {
    return view('tambah_data_logsurvey');
})->name('tambah_data_logsurvey');
Route::post('/tambah-data-logsurvey', function (Request $request) {
    return redirect('/logsurvey')->with('success', 'Data berhasil disimpan!');
});

// Halaman Log Instalasi
Route::get('/loginstalasi', function () {
    return view('log_instalasi');
});
Route::get('/tambah-data-loginstalasi', function () {
    return view('tambah_data_loginstalasi');
})->name('tambah_data_loginstalasi');
Route::post('/tambah-data-loginstalasi', function (Request $request) {
    return redirect('/loginstalasi')->with('success', 'Data berhasil disimpan!');
});

// Halaman Log Dismantle
Route::get('/logdismantle', function () {
    return view('log_dismantle');
});
Route::get('/tambah-data-logdismantle', function () {
    return view('tambah_data_logdismantle');
})->name('tambah_data_logdismantle');
Route::post('/tambah-data-logdismantle', function (Request $request) {
    return redirect('/logdismantle')->with('success', 'Data berhasil disimpan!');
});

// Halaman Log Dismantle
Route::get('/bast', function () {
    return view('bast');
});
Route::get('/tambah-data-bast', function () {
    return view('tambah_data_bast');
})->name('tambah_data_bast');
Route::post('/tambah-data-bast', function (Request $request) {
    return redirect('/bast')->with('success', 'Data berhasil disimpan!');
});

// Halaman Log uatcctv
Route::get('/uatcctv', function () {
    return view('uatcctv');
});
Route::get('/tambah-data-uatcctv', function () {
    return view('tambah_data_uatcctv');
})->name('tambah_data_uatcctv');
Route::post('/tambah-data-uatcctv', function (Request $request) {
    return redirect('/uatcctv')->with('success', 'Data berhasil disimpan!');
});

// Halaman uat internet
Route::get('/uatinternet', function () {
    return view('uatinternet');
});
Route::get('/tambah-data-uatinternet', function () {
    return view('tambah_data_uatinternet');
})->name('tambah_data_uatinternet');
Route::post('/tambah-data-uatinternet', function (Request $request) {
    return redirect('/uatinternet')->with('success', 'Data berhasil disimpan!');
});

// Halaman Daily Maintenance Genset
Route::get('/genset', function () {
    return view('genset');
});
Route::get('/tambah-data-genset', function () {
    return view('tambah_data_genset');
})->name('tambah_data_genset');
Route::post('/tambah-data-genset', function (Request $request) {
    return redirect('/genset')->with('success', 'Data berhasil disimpan!');
});
