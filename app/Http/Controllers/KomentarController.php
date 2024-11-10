<?php
namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subjek' => 'required|string|max:255',
        'pendapat' => 'required|string',
    ]);

    // Simpan data tanpa `_token`
    Komentar::create($validatedData);

    return redirect()->back()->with('success', 'Komentar berhasil disimpan.');
}


    public function destroy($id)
    {
        $komentar = Komentar::findOrFail($id);
        $komentar->delete();

        return redirect()->route('admin.komentar')->with('success', 'Komentar berhasil dihapus.');
    }

    public function index()
{
    $komentars = Komentar::all();
    return view('admin.komentar', compact('komentars'));
}

}
