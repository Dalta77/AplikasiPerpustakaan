<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Edit Peminjaman</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="no_buku">Buku:</label>
                        <select id="no_buku" name="no_buku" class="form-control" required>
                            @foreach ($buku as $b)
                                <option value="{{ $b->id }}" {{ $b->id == $peminjaman->no_buku ? 'selected' : '' }}>{{ $b->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_anggota">Anggota:</label>
                        <select id="id_anggota" name="id_anggota" class="form-control" required>
                            @foreach ($anggota as $a)
                                <option value="{{ $a->id }}" {{ $a->id == $peminjaman->id_anggota ? 'selected' : '' }}>{{ $a->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_peminjaman">Tanggal Peminjaman:</label>
                        <input type="date" id="tgl_peminjaman" name="tgl_peminjaman" class="form-control" value="{{ $peminjaman->tgl_peminjaman }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pengembalian">Tanggal Pengembalian:</label>
                        <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" class="form-control" value="{{ $peminjaman->tgl_pengembalian }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="kembali" {{ $peminjaman->status == 'kembali' ? 'selected' : '' }}>Kembali</option>
                            <option value="belum" {{ $peminjaman->status == 'belum' ? 'selected' : '' }}>Belum</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
