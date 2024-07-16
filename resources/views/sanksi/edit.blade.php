<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sanksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Background color */
            font-family: Arial, sans-serif; /* Font */
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Edit Sanksi</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-container">
            <form action="{{ route('sanksi.update', $sanksi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="id_anggota">ID Anggota:</label>
                        <select class="form-control" id="id_anggota" name="id_anggota">
                            @foreach ($anggota as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $sanksi->id_anggota ? 'selected' : '' }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="id_peminjaman">ID Peminjaman:</label>
                        <select class="form-control" id="id_peminjaman" name="id_peminjaman">
                            @foreach ($peminjaman as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $sanksi->id_peminjaman ? 'selected' : '' }}>{{ $item->id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jumlah_denda">Jumlah Denda:</label>
                        <input type="number" class="form-control" id="jumlah_denda" name="jumlah_denda" value="{{ $sanksi->jumlah_denda }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="tunggakan" {{ $sanksi->status == 'tunggakan' ? 'selected' : '' }}>Tunggakan</option>
                            <option value="lunas" {{ $sanksi->status == 'lunas' ? 'selected' : '' }}>Lunas</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn btn-primary px-5">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
