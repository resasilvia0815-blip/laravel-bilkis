<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMK Negeri 1 Cijati</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
        }

        .navbar {
            background: #151b4f;
            padding: 20px 40px;
            display: flex;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
            margin-right: auto;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .nav-menu a:hover {
            color: #ddd;
        }

        .content {
            min-height: 600px;
        }

        /* FOOTER */
        footer {
            background: #151b4f;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 40px;
        }

        footer p {
            margin: 7px;
        }

        @media (max-width: 800px) {
            .navbar {
                flex-direction: column;
                gap: 20px;
            }

            .logo {
                margin-right: 0;
            }

            .nav-menu {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            SMK NEGERI 1 CIJATI
        </div>

        <ul class="nav-menu">

            <li>
                <a href="{{ url('/') }}">Beranda</a>
            </li>

            <li>
                <a href="{{ url('/profil') }}">Profil</a>
            </li>

            <li>
                <a href="{{ url('/guru') }}">Guru</a>
            </li>

            <li>
                <a href="{{ url('/jurusan') }}">Jurusan</a>
            </li>

            <li>
                <a href="{{ url('/ekstrakurikuler') }}">
                    Ekstrakurikuler
                </a>
            </li>

        </ul>

    </nav>


    <!-- ISI HALAMAN -->
    <main class="content">
        @yield('content')
    </main>


    <!-- FOOTER -->
    <footer>

        <p>
            <strong>SMK NEGERI 1 CIJATI</strong>
        </p>

        <p>
            Mencetak Generasi Berprestasi, Terampil, dan Berkarakter
        </p>

        <p>
            &copy; 2026 SMK Negeri 1 Cijati
        </p>

    </footer>

</body>
</html>