<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;

Route::get('/', function () {
    return view('dashboard'); 
});

Route::get('/rab', function () {
    return view('rab');
});

Route::get('/kontrak', function () {
    return view('kontak');
});

Route::get('/permintaanbbm', function () {
    return view('permintaanbbm');
});

Route::get('/pengajuanbiaya', function () {
    return view('pengajuanbiaya');
});

Route::get('/permintaanbbm', [FinanceController::class, 'create'])->name('finance.create');
Route::post('/permintaanbbm', [FinanceController::class, 'store'])->name('finance.store');
