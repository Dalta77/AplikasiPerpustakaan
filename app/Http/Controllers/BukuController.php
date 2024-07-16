<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Penulis;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $rak = Rak::all();
        $penulis = Penulis::all();
        return view('buku.create', compact('rak', 'penulis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:200',
            'edisi' => 'required|max:50',
            'no_rak' => 'required|exists:rak,id',
            'tahun' => 'required|date_format:Y-m-d',
            'penerbit' => 'required|max:100',
            'kd_penulis' => 'required|exists:penulis,id',
        ]);

        Buku::create($validated);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $rak = Rak::all();
        $penulis = Penulis::all();
        return view('buku.edit', compact('buku', 'rak', 'penulis'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|max:200',
            'edisi' => 'required|max:50',
            'no_rak' => 'required|exists:rak,id',
            'tahun' => 'required|date_format:Y-m-d',
            'penerbit' => 'required|max:100',
            'kd_penulis' => 'required|exists:penulis,id',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($validated);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diupdate.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
