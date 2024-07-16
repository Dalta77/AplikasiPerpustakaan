<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis; // Sesuaikan dengan nama model Penulis Anda

class PenulisController extends Controller
{
    /**
     * Menampilkan daftar penulis.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', compact('penulis'));
    }

    /**
     * Menampilkan formulir untuk membuat penulis baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penulis.create');
    }

    /**
     * Menyimpan penulis baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_penulis' => 'required|max:150',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|max:200',
        ]);

        Penulis::create($request->all());

        return redirect()->route('penulis.index')
                        ->with('success', 'Penulis berhasil ditambahkan.');
    }

    /**
     * Menampilkan data penulis yang akan diubah.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Menyimpan perubahan pada penulis ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penulis' => 'required|max:150',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|max:200',
        ]);

        $penulis = Penulis::findOrFail($id);
        $penulis->update($request->all());

        return redirect()->route('penulis.index')
                        ->with('success', 'Penulis berhasil diperbarui.');
    }

    /**
     * Menghapus data penulis dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')
                        ->with('success', 'Penulis berhasil dihapus.');
    }
}
