<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }
        
        .container:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #007acc;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        label {
            color: #555;
            margin-bottom: 8px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #007acc;
            outline: none;
        }
        
        button[type="submit"] {
            padding: 15px;
            background-color: #007acc;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        
        button[type="submit"]:hover {
            background-color: #005f99;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Anggota</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->no_hp }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>{{ $anggota->email }}</td>
                </tr>
            </tbody>
        </table>
        
        <form method="POST" action="{{ route('anggota.update', ['anggotum' => $anggota->id]) }}">
            @csrf
            @method('PUT')

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $anggota->nama }}" required>
            
            <label for="no_hp">No HP:</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}" required>
            
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required>{{ $anggota->alamat }}</textarea>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $anggota->email }}" required>
            
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
