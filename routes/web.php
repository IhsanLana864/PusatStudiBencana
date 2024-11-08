<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

    // // contoh route example
    // Route::get('/akunsaya', function () {
    //     return view('example');
    // })->name('example');
Route::get('/', function () {
    return view('index');
});

Route::get('/about-element-1', function () {
    return view('about-element-1');
});

Route::get('/appointment-element', function () {
    return view('appointment-element');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/books', function () {
    return view('books');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/counter-element-1', function () {
    return view('counter-element-1');
});

Route::get('/appointment-element', function () {
    return view('appointment-element');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/error ', function () {
    return view('error');
});
Route::get('/faq-element', function () {
    return view('faq-element');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/intro-element-1.', function () {
    return view('intro-element-1');
});

Route::get('/news-element-1', function () {
    return view('news-element-1');
});

Route::get('/news-element-4', function () {
    return view('news-element-4');
});
Route::get('/news-element-5', function () {
    return view('news-element-5');
});

Route::get('/projects-elemet-1', function () {
    return view('project-element-1');
});
Route::get('/projects-elemet-2', function () {
    return view('project-element-2');
});
Route::get('/projects-elemet-3', function () {
    return view('project-element-3');
});
Route::get('/research-details', function () {
    return view('research-details');
});
Route::get('/research', function () {
    return view('ini');
});
Route::get('/Sumberdaya', function () {
    return view('Sumberdaya');
});
Route::get('/Tentangkami', function () {
    return view('Tentangkami');
});
Route::get('/service', function () {
    return view('service');
    });
Route::get('/service-element-1', function () {
return view('service-element-1');
});
Route::get('/service-element-2', function () {
    return view('service-element-2');
});
Route::get('/service-element-3', function () {
    return view('service-element-3');
});
Route::get('/service-element-4', function () {
    return view('service-element-4');
});
Route::get('/skill-element-1', function () {
    return view('skill-element-1');
});
Route::get('/skill-element-2', function () {
    return view('skill-element-2');
});
Route::get('/team-details', function () {
    return view('team-details');
});
Route::get('/team-element-1', function () {
    return view('team-element-1');
});
Route::get('/team-element-2', function () {
    return view('team-element-2');
});
Route::get('/working-element-1', function () {
    return view('working-element-1');
});
Route::get('/working-element-2', function () {
    return view('working-element-2');
});


//ROUTE ADMIN
Route::get('/admin', function () {
    return view('admin.index');
});

// Route untuk CRUD Artikel
Route::get('/admin/artikel', function () {
    return view('admin.artikel');
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


