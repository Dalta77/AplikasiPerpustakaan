@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Buku') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('buku.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="judul">{{ __('Judul') }}</label>
                            <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="edisi">{{ __('Edisi') }}</label>
                            <input id="edisi" type="text" class="form-control @error('edisi') is-invalid @enderror" name="edisi" value="{{ old('edisi') }}" required>
                            @error('edisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_rak">{{ __('No Rak') }}</label>
                            <select id="no_rak" class="form-control @error('no_rak') is-invalid @enderror" name="no_rak" required>
                                <option value="">{{ __('Pilih No Rak') }}</option>
                                @foreach($rak as $r)
                                    <option value="{{ $r->id }}" {{ old('no_rak') == $r->id ? 'selected' : '' }}>{{ $r->id }}</option>
                                @endforeach
                            </select>
                            @error('no_rak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun">{{ __('Tahun') }}</label>
                            <input id="tahun" type="date" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" required>
                            @error('tahun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="penerbit">{{ __('Penerbit') }}</label>
                            <input id="penerbit" type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{ old('penerbit') }}" required>
                            @error('penerbit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kd_penulis">{{ __('Penulis') }}</label>
                            <select id="kd_penulis" class="form-control @error('kd_penulis') is-invalid @enderror" name="kd_penulis" required>
                                <option value="">{{ __('Pilih Penulis') }}</option>
                                @foreach($penulis as $p)
                                    <option value="{{ $p->id }}" {{ old('kd_penulis') == $p->id ? 'selected' : '' }}>{{ $p->nama_penulis }}</option>
                                @endforeach
                            </select>
                            @error('kd_penulis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Tambah Buku') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
