<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        body {
            background-color: #00a6b5;
            color: white;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar-atas {
            padding: 20px 80px 20px 110px;
        }

        .content-wrapper {
            flex: 1;
            padding-top: 130px;
        }

        .isi-content {
            margin-bottom: 70px;
        }

        .margin-section-between {
            margin-top: 100px;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow navbar-atas fixed-top">
        <div class="container-fluid">
            <img src="{{ asset('images/iclabs-logo.jpg') }}" alt="Logo Iclabs" width="70px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('laboratorium') }}">Laboratorium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pengajar') }}">Pengajar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="content-wrapper">
        <div class="container isi-content">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; 2025 IcLabs Fakultas Ilmu Komputer Universitas Muslim Indonesia</p>
        <a href="https://fikom.umi.ac.id/" target="_blank">FIKOM</a>
        <a href="https://www.instagram.com/labfikomumi/" target="_blank">Instagram</a>
    </footer>

    <!-- Bootstrap JS Bundle (Includes Popper) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
