<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('jenis', 'publikasi')->get();
        $beritas = Artikel::where('jenis', 'berita')->get();
        $events = Artikel::where('jenis', 'event')->get();

        return view('publikasi', compact('artikels', 'beritas', 'events'));
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('artikel', compact('artikel'));
    }
}
