<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <style>
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: roboto, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            margin-bottom: 8px;
            color: #555;
            display: block;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007acc;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #005f99;
        }
    </style>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" value="{{ $buku->judul }}" required>
        </div>

        <div class="mb-3">
            <label for="edisi">Edisi</label>
            <input type="text" id="edisi" name="edisi" value="{{ $buku->edisi }}" required>
        </div>

        <div class="mb-3">
            <label for="no_rak">Nomor Rak</label>
            <select id="no_rak" name="no_rak" required>
                @foreach($rak as $r)
                    <option value="{{ $r->id }}" {{ $buku->no_rak == $r->id ? 'selected' : '' }}>{{ $r->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="date" id="tahun" name="tahun" value="{{ $buku->tahun }}" required>
        </div>

        <div class="mb-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
        </div>

        <div class="mb-3">
            <label for="kd_penulis">Kode Penulis</label>
            <select id="kd_penulis" name="kd_penulis" required>
                @foreach($penulis as $pen)
                    <option value="{{ $pen->id }}" {{ $buku->kd_penulis == $pen->id ? 'selected' : '' }}>{{ $pen->id }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Update">
    </form>
</body>
</html>
