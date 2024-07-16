<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            display: flex;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; 
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #007bff; 
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1; 
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            width: 100%;
        }
        .sidebar a img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background-color: #0056b3; /* Hover background color */
        }
        .sidebar .dropdown-menu {
            background-color: #007bff; /* Dropdown menu background color */
        }
        .sidebar .dropdown-item {
            color: #FFFFFF;
            padding: 10px 20px; /* Padding for dropdown items */
        }
        .sidebar .dropdown-item:hover {
            background-color: #0056b3; /* Hover background color for dropdown items */
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px); /* Adjust width to account for sidebar */
        }
        header {
            background-color: #e9ecef; /* Header background color */
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #CED4DA; /* Add border bottom for separation */
        }
        main {
            background-color: #FFFFFF;
            border: 1px solid #CED4DA;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="{{ route('dashboard') }}">
            <h3><b>Perpustakaan</b></h3>
        </a>

        @auth
            <div class="dropdown mb-3">
                <a id="dropdownMenuLink" class="dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/fotoKu.jpeg') }}" alt="{{ Auth::user()->name }}" class="avatar" style="width: 50px; height: 50px; border-radius: 50%;">
                    <span class="ml-2">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i> Edit Profil</a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
        @else
            <a href="#">Signup</a>
        @endauth

        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('anggota.index') }}"><i class="fas fa-users-cog"></i> Anggota</a>
        <a href="{{ route('peminjaman.index') }}"><i class="fas fa-book-reader"></i> Peminjaman</a>
        <a href="{{ route('buku.index') }}"><i class="fas fa-book"></i> Buku</a>
        <a href="{{ route('penulis.index') }}"><i class="fas fa-pen-nib"></i> Penulis</a>
        <a href="{{ route('sanksi.index') }}"><i class="fas fa-exclamation-triangle"></i> Sanksi</a>
        <a href="{{ route('rak.index') }}"><i class="far fa-bookmark"></i> Rak</a>

        <div class="mt-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Log Out</button>
            </form>
        </div>
        
    </div>
    
    <div class="content">
        <header>
            <h1>@yield('title')</h1>
        </header>
        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
