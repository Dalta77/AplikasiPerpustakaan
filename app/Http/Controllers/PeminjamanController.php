<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('buku', 'anggota')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $buku = Buku::all();
        $anggota = Anggota::all();
        return view('peminjaman.create', compact('buku', 'anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_buku' => 'required|exists:buku,id',
            'id_anggota' => 'required|exists:anggota,id',
            'tgl_peminjaman' => 'required|date',
            'tgl_pengembalian' => 'required|date|after:tgl_peminjaman',
            'status' => 'required|in:kembali,belum',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function show(Peminjaman $peminjaman)
    {
        return view('peminjaman.show', compact('peminjaman'));
    }

    public function edit(Peminjaman $peminjaman)
    {
        $buku = Buku::all();
        $anggota = Anggota::all();
        return view('peminjaman.edit', compact('peminjaman', 'buku', 'anggota'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'no_buku' => 'required|exists:buku,id',
            'id_anggota' => 'required|exists:anggota,id',
            'tgl_peminjaman' => 'required|date',
            'tgl_pengembalian' => 'nullable|date',
            'status' => 'required|in:kembali,belum',
        ]);

        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}
