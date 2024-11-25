<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all(); // Ambil semua artikel
        return view('admin.artikel', compact('artikels')); // Kirim ke view
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'jenis' => 'required|in:publikasi,berita',
        ]);

        $gambarPath = $request->file('gambar')->store('artikel', 'public');

        Artikel::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'jenis' => $request->jenis,
        ]);

        return response()->json(['success' => 'Artikel berhasil ditambahkan']);
    }



    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id); // Ambil artikel berdasarkan ID
        return response()->json($artikel); // Kirim data artikel sebagai response JSON
    }

    //     public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'judul' => 'required|string|max:255',
    //         'deskripsi' => 'required|string',
    //         'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //         'jenis' => 'required|in:publikasi,berita',
    //     ]);

    //     $artikel = Artikel::findOrFail($id);

    //     if ($request->hasFile('gambar')) {
    //         Storage::disk('public')->delete($artikel->gambar);
    //         $gambarPath = $request->file('gambar')->store('artikel', 'public');
    //     } else {
    //         $gambarPath = $artikel->gambar;
    //     }

    //     $artikel->update([
    //         'judul' => $request->judul,
    //         'deskripsi' => $request->deskripsi,
    //         'gambar' => $gambarPath,
    //         'jenis' => $request->jenis,
    //     ]);

    //     return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil diperbarui.');
    // }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'jenis' => 'required|in:publikasi,berita,event',
        ]);

        $artikel = Artikel::findOrFail($id);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($artikel->gambar);
            $gambarPath = $request->file('gambar')->store('artikel', 'public');
        } else {
            $gambarPath = $artikel->gambar;
        }

        $artikel->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'jenis' => $request->jenis,
        ]);

        return response()->json(['success' => 'Artikel berhasil diperbarui']);
    }


    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        Storage::disk('public')->delete($artikel->gambar); // Hapus gambar dari storage
        $artikel->delete();

        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil dihapus.');
    }
}
