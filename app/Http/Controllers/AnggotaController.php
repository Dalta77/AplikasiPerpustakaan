<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:150',
            'no_hp' => 'required|max:16',
            'alamat' => 'required',
            'email' => 'required|email|max:200'
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function show($id)
    {
        try {
            $anggota = Anggota::findOrFail($id);
            return view('anggota.show', compact('anggota'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('anggota.index')
                ->with('error', 'Anggota tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        try {
            $anggota = Anggota::findOrFail($id);
            return view('anggota.edit', compact('anggota'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('anggota.index')
                ->with('error', 'Anggota tidak ditemukan.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:150',
            'no_hp' => 'required|max:16',
            'alamat' => 'required',
            'email' => 'required|email|max:200'
        ]);

        try {
            $anggota = Anggota::findOrFail($id);
            $anggota->update($request->all());

            return redirect()->route('anggota.index')
                ->with('success', 'Anggota berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('anggota.index')
                ->with('error', 'Anggota tidak ditemukan.');
        }
    }

    public function destroy($id)
    {
        try {
            $anggota = Anggota::findOrFail($id);
            $anggota->delete();

            return redirect()->route('anggota.index')
                ->with('success', 'Anggota berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('anggota.index')
                ->with('error', 'Anggota tidak ditemukan.');
        }
    }
}
