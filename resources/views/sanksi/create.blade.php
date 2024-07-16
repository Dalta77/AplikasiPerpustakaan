<!-- resources/views/sanksi/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sanksi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="my-4">Tambah Sanksi</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sanksi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_anggota">ID Anggota:</label>
                <select class="form-control" id="id_anggota" name="id_anggota">
                    @foreach ($anggota as $item)
                        <option value="{{ $item->id }}">{{ $item->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_peminjaman">ID Peminjaman:</label>
                <select class="form-control" id="id_peminjaman" name="id_peminjaman">
                    @foreach ($peminjaman as $item)
                        <option value="{{ $item->id }}">{{ $item->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_denda">Jumlah Denda:</label>
                <input type="number" class="form-control" id="jumlah_denda" name="jumlah_denda">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="tunggakan">Tunggakan</option>
                    <option value="lunas">Lunas</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Sanksi</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
