<?php
namespace App\Http\Controllers;

use App\Models\Dokumentasi; // Pastikan model Dokumentasi sudah ada
use Illuminate\Http\Request;

class DokumentasiUserController extends Controller
{
    public function index()
    {
        // Ambil semua data dokumentasi dari database
        $dokumentasis = Dokumentasi::all();

        // Kirim data ke view docum.blade.php
        return view('docum', compact('dokumentasis'));
    }
}
