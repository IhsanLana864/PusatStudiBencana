<?php

use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\DokumentasiController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\DokumentasiUserController;
use App\Http\Controllers\KomentarController;



// Route::get('/', function () {
//     return view('welcome');
// });

// // contoh route example
// Route::get('/akunsaya', function () {
//     return view('example');
// })->name('example');

// Routes Tampilan
Route::get('/', function () {
    $komentars = Komentar::all();
    return view('index', compact('komentars'));
});
Route::get('/index', function () {
    return view('index');
});

//routes dinamis publikasi
Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi.index');
Route::get('/publikasi/{id}', [PublikasiController::class, 'show'])->name('publikasi.show');

// route dinamis docum
Route::get('/docum', [DokumentasiUserController::class, 'index'])->name('dokumentasi.index');

// route dinamis komentar
// Rute untuk user
Route::post('/komentar', [KomentarController::class, 'store'])->name('komentar.store');


Route::get('/berita', function () {
    return view('berita');
});

Route::get('/event', function () {
    return view('event');
});
Route::get('/artikel', function () {
    return view('artikel');
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
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    Route::get('/admin/publikasi', function () {
        return view('admin.artikel');
    })->name('admin.publikasi');

    Route::get('/admin/dokumentasi', function () {
        return view('admin.dokumentasi');
    })->name('admin.dokumentasi');

    Route::get('/admin/komentar', function () {
        return view('admin.komentar');
    })->name('admin.komentar');

    // Route untuk Logout
    Route::post('/admin/logout', function () {
        return redirect('/index');
    });
});
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    //route artikel
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store'); // Route POST
    Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

    //route dokumentasi
    Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi');
    Route::post('/dokumentasi', [DokumentasiController::class, 'store'])->name('dokumentasi.store');
    Route::get('/dokumentasi/{id}/edit', [DokumentasiController::class, 'edit'])->name('dokumentasi.edit');
    Route::put('/dokumentasi/{id}', [DokumentasiController::class, 'update'])->name('dokumentasi.update');
    Route::delete('/dokumentasi/{id}', [DokumentasiController::class, 'destroy'])->name('dokumentasi.destroy');

    Route::get('/komentar', [KomentarController::class, 'index'])->name('komentar');
    Route::delete('/komentar/{id}', [KomentarController::class, 'destroy'])->name('komentar.destroy');


});




//ROUTE Login
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');




// Route untuk registered
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});




// Route untuk recovery
Route::get('/login/recovery', function () {
    return view('masuk.recovery');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
