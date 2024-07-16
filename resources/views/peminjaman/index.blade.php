<!-- resources/views/peminjaman/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Peminjaman</h1>
        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah Peminjaman</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Peminjaman</th>
                        <th>Buku</th>
                        <th>ID Anggota</th>
                        <th>tgl Peminjaman</th>
                        <th>tgl Pengembalian</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($peminjaman as $peminjamanItem)
                    <tr>
                        <td>{{ $peminjamanItem->id }}</td>
                        <td>{{ $peminjamanItem->buku->judul }}</td>
                        <td>{{ $peminjamanItem->anggota->id }}</td>
                        <td>{{ $peminjamanItem->tgl_peminjaman }}</td>
                        <td>{{ $peminjamanItem->tgl_pengembalian }}</td>
                        <td>{{ $peminjamanItem->status }}</td>
                        <td>
                                <a href="{{ route('peminjaman.edit', ['peminjaman' => $peminjamanItem->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('peminjaman.destroy', ['peminjaman' => $peminjamanItem->id]) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus peminjaman ini?')">Hapus</button>
                                </form>
                            
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data peminjaman.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
</div>
@endsection