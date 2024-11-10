<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasis = Dokumentasi::all();
        return view('admin.dokumentasi', compact('dokumentasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penjelasan' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->store('dokumentasi', 'public');

        Dokumentasi::create([
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'gambar' => $gambarPath,
        ]);

        return response()->json(['success' => 'Dokumentasi berhasil ditambahkan']);
    }

    public function edit($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        return response()->json($dokumentasi);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penjelasan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $dokumentasi = Dokumentasi::findOrFail($id);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($dokumentasi->gambar);
            $gambarPath = $request->file('gambar')->store('dokumentasi', 'public');
        } else {
            $gambarPath = $dokumentasi->gambar;
        }

        $dokumentasi->update([
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            'gambar' => $gambarPath,
        ]);

        return response()->json(['success' => 'Dokumentasi berhasil diperbarui']);
    }

    public function destroy($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        Storage::disk('public')->delete($dokumentasi->gambar);
        $dokumentasi->delete();

        return redirect()->route('admin.dokumentasi')->with('success', 'Dokumentasi berhasil dihapus.');
    }
}
