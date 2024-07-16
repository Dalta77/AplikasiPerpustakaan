@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Rak</h1>
        <a href="{{ route('rak.create') }}" class="btn btn-primary">Tambah Rak</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rak as $rak)
                <tr>
                    <td>{{ $rak->id }}</td>
                    <td>{{ $rak->lokasi }}</td>
                    <td>
                    <a href="{{ route('rak.edit', ['rak' => $rak->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('rak.destroy', ['rak' => $rak->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection