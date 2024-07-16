@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Peminjaman') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('peminjaman.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="no_buku" class="col-md-4 col-form-label text-md-right">{{ __('No Buku') }}</label>
                            <div class="col-md-6">
                                <select id="no_buku" class="form-control @error('no_buku') is-invalid @enderror" name="no_buku" required>
                                    <option value="">{{ __('Pilih Buku') }}</option>
                                    @foreach($buku as $b)
                                        <option value="{{ $b->id }}" {{ old('no_buku') == $b->id ? 'selected' : '' }}>{{ $b->judul }}</option>
                                    @endforeach
                                </select>
                                @error('no_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_anggota" class="col-md-4 col-form-label text-md-right">{{ __('ID Anggota') }}</label>
                            <div class="col-md-6">
                                <select id="id_anggota" class="form-control @error('id_anggota') is-invalid @enderror" name="id_anggota" required>
                                    <option value="">{{ __('Pilih Anggota') }}</option>
                                    @foreach($anggota as $a)
                                        <option value="{{ $a->id }}" {{ old('id_anggota') == $a->id ? 'selected' : '' }}>{{ $a->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_peminjaman" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Peminjaman') }}</label>
                            <div class="col-md-6">
                                <input id="tgl_peminjaman" type="date" class="form-control @error('tgl_peminjaman') is-invalid @enderror" name="tgl_peminjaman" value="{{ old('tgl_peminjaman') }}" required>
                                @error('tgl_peminjaman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_pengembalian" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pengembalian') }}</label>
                            <div class="col-md-6">
                                <input id="tgl_pengembalian" type="date" class="form-control @error('tgl_pengembalian') is-invalid @enderror" name="tgl_pengembalian" value="{{ old('tgl_pengembalian') }}">
                                @error('tgl_pengembalian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                    <option value="">{{ __('Pilih Status') }}</option>
                                    <option value="kembali" {{ old('status') == 'kembali' ? 'selected' : '' }}>{{ __('Kembali') }}</option>
                                    <option value="belum" {{ old('status') == 'belum' ? 'selected' : '' }}>{{ __('Belum') }}</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
