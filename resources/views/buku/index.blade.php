@extends('layouts.app')

@section('content')
    <class="container">
        <h1 class="my-4 text-center">Daftar Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Buku</th>
                                <th>Judul</th>
                                <th>Edisi</th>
                                <th>ID Rak</th>
                                <th>Tahun</th>
                                <th>Penerbit</th>
                                <th>Kode Penulis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buku as $b)
                                <tr>
                                    <td>{{ $b->id }}</td>
                                    <td>{{ $b->judul }}</td>
                                    <td>{{ $b->edisi }}</td>
                                    <td>{{ $b->rak->id }}</td> 
                                    <td>{{ $b->tahun }}</td>
                                    <td>{{ $b->penerbit }}</td>
                                    <td>{{ $b->penulis->id }}</td>
                                    <td>
                                        <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('buku.destroy', $b->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus buku ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data buku.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            
        
    </div>
@endsection