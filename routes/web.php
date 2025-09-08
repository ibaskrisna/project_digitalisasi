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

Route::get('/troubleshoot', function () {
    return view('troubleshoot');
});

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/survey', function () {
    return view('survey');
});