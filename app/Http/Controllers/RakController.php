<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index()
    {
        $rak = Rak::all(); 
        return view('rak.index', compact('rak'));
    }

    public function create()
    {
        return view('rak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|string|max:150',
        ]);

        Rak::create($request->all());

        return redirect()->route('rak.index')->with('success', 'Rak berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $rak = Rak::findOrFail($id);

        return view('rak.edit', compact('rak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lokasi' => 'required|string|max:150',
        ]);

        $rak = Rak::findOrFail($id);
        $rak->update($request->all());

        return redirect()->route('rak.index')->with('success', 'Rak berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $rak = Rak::findOrFail($id);
        $rak->delete();

        return redirect()->route('rak.index')->with('success', 'Rak berhasil dihapus!');
    }
}
