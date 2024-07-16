<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background: #3498db;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-self: center;
        }

        input[type="submit"]:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Anggota</h1>
        <form action="{{ route('anggota.store') }}" method="POST">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="no_hp">No HP:</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>