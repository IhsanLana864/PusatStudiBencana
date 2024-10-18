<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    // // contoh route example
    // Route::get('/akunsaya', function () {
    //     return view('example');
    // })->name('example');
