<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanksi;
use App\Models\Anggota; 
use App\Models\Peminjaman; 

class SanksiController extends Controller
{
    public function index()
    {
        $sanksi = Sanksi::all();
        return view('sanksi.index', compact('sanksi'));
    }

    public function create()
    {
        $anggota = Anggota::all(); 
        $peminjaman = Peminjaman::all(); 
        return view('sanksi.create', compact('anggota', 'peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required|integer',
            'id_peminjaman' => 'required|integer',
            'jumlah_denda' => 'required|integer',
            'status' => 'required|in:tunggakan,lunas',
        ]);

        Sanksi::create($request->all());

        return redirect()->route('sanksi.index')->with('success', 'Sanksi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sanksi = Sanksi::findOrFail($id);
        $anggota = Anggota::all();
        $peminjaman = Peminjaman::all();
        return view('sanksi.edit', compact('sanksi', 'anggota', 'peminjaman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_anggota' => 'required|integer',
            'id_peminjaman' => 'required|integer',
            'jumlah_denda' => 'required|integer',
            'status' => 'required|in:tunggakan,lunas',
        ]);

        $sanksi = Sanksi::findOrFail($id);
        $sanksi->update($request->all());

        return redirect()->route('sanksi.index')->with('success', 'Sanksi berhasil diupdate.');
    }

    public function destroy($id)
    {
        $sanksi = Sanksi::findOrFail($id);
        $sanksi->delete();

        return redirect()->route('sanksi.index')->with('success', 'Sanksi berhasil dihapus.');
    }
}
