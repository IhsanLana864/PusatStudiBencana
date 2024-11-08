<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // contoh route example
// Route::get('/akunsaya', function () {
//     return view('example');
// })->name('example');

// Routes Tampilan
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/docum', function () {
    return view('docum');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/sumber-daya', function () {
    return view('sumber-daya');
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});


//ROUTE ADMIN
Route::get('/admin', function () {
    return view('admin.index');
});

// Route untuk CRUD Artikel
Route::get('/admin/artikel', function () {
    return view('admin.artikel');
});

Route::get('/admin/komentar', function () {
    return view('admin.komentar');
});

// Route untuk CRUD Dokumentasi
Route::get('/admin/dokumentasi', function () {
    return view('admin.dokumentasi');
});

// Route untuk Logout
Route::get('/admin/logout', function () {
    return redirect('/index');
});



//ROUTE Login
Route::get('/login', function () {
    return view('masuk.login');
});

// Route untuk registered
Route::get('/register', function () {
    return view('masuk.register');
});

// Route untuk recovery
Route::get('/login/recovery', function () {
    return view('masuk.recovery');
});
