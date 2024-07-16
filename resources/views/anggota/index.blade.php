@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <h2 style="font-family: cambria;">Daftar Anggota</h2>
        </div>
        <div class="col-md-12 mb-3">
            <a href="{{ route('anggota.create') }}" class="btn btn-primary">Tambah Anggota</a>
        </div>
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-striped" style="font-family: Arial, sans-serif;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>No.Handphone</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggotas as $anggota)
                        <tr>
                            <td>{{ $anggota->id }}</td>
                            <td>{{ $anggota->nama }}</td>
                            <td>{{ $anggota->no_hp }}</td>
                            <td>{{ $anggota->email }}</td>
                            <td>{{ $anggota->alamat }}</td>
                            <td>
                                <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this anggota?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection