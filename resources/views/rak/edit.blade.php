<!-- resources/views/rak/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Background color abu-abu muda */
            font-family: 'Arial', sans-serif; /* Font family Arial */
            margin: 0;
            padding: 20px;
        }
        .card {
            background-color: #ffffff; /* Background color putih */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        .card-header {
            background-color: #007bff; /* Background color biru */
            color: #ffffff; /* Warna teks putih */
            padding: 10px;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .form-group label {
            font-weight: bold;
            color: #333333; /* Warna teks label */
        }
        .form-control {
            border: 1px solid #ced4da; /* Border dengan warna abu-abu muda */
            border-radius: 4px;
            transition: border-color 0.2s ease-in-out;
        }
        .form-control:focus {
            border-color: #007bff; /* Warna border saat input difokuskan */
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Shadow saat input difokuskan */
        }
        .btn-primary {
            background-color: #007bff; /* Warna tombol biru */
            border-color: #007bff;
            color: #ffffff; /* Warna teks putih */
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Warna tombol biru saat dihover */
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>Edit Rak</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('rak.update', ['rak' => $rak->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="lokasi">Lokasi:</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $rak->lokasi }}" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Update</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
