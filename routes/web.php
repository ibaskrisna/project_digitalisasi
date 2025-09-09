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

Route::get('/logcustomer', function () {
    return view('logcustomer');
});

Route::get('/dismantle', function () {
    return view('dismantle');
});

Route::get('/updatedata', function () {
    return view('updatedata');
});