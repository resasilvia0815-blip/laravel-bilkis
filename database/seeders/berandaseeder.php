<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMKN 1 CIJATI</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fa;
            color: #333;
        }

        /* NAVBAR */
        nav {
            background: #0d47a1;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: white;
            font-size: 24px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #ffca28;
        }

        /* HERO / BACKGROUND GERBANG */
        .hero {
            min-height: 500px;
            display: flex;
            align-items: center;
            padding: 50px 7%;

            background:
                linear-gradient(
                    rgba(13, 71, 161, 0.45),
                    rgba(13, 71, 161, 0.45)
                ),
                url('gerbang.jpeg');

            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .hero-content {
            color: white;
            max-width: 650px;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 19px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            background: #ffca28;
            color: #222;
            padding: 13px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: white;
            color: #0d47a1;
        }

        /* SECTION */
        .section {
            padding: 60px 7%;
            text-align: center;
        }

        .section h2 {
            color: #0d47a1;
            margin-bottom: 15px;
            font-size: 30px;
        }

        .section > p {
            margin-bottom: 10px;
        }

        /* CARDS */
        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-top: 35px;
        }

        .card {
            background: white;
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .card h3 {
            color: #0d47a1;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .card p {
            font-size: 25px;
            font-weight: bold;
            color: #333;
        }

        /* FOOTER */
        footer {
            background: #0d47a1;
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 20px;
        }

        /* RESPONSIVE */
        @media(max-width: 900px) {

            nav {
                flex-direction: column;
                gap: 20px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero h1 {
                font-size: 40px;
            }
        }

        @media(max-width: 600px) {

            .cards {
                grid-template-columns: 1fr;
            }

            .hero {
                min-height: 450px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }

            nav h2 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>

        <h2>SMK NEGERI 1 CIJATI</h2>

        <ul>
            <li>
                <a href="/">Beranda</a>
            </li>

            <li>
                <a href="/profil">Profil</a>
            </li>

            <li>
                <a href="/guru">Guru</a>
            </li>

            <li>
                <a href="/jurusan">Jurusan</a>
            </li>

            <li>
                <a href="/ekstrakurikuler">
                    Ekstrakurikuler
                </a>
            </li>

            </li>
        </ul>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">

            <h1>
                SMKN 1 CIJATI
            </h1>

            <p>
                Selamat datang di website resmi
                SMK Negeri 1 Cijati.
            </p>

            <a href="/profil" class="btn">
                Selanjutnya
            </a>

        </div>

    </section>


    <!-- INFORMASI SEKOLAH -->
    <section class="section">

        <h2>
            Informasi Sekolah
        </h2>

        <p>
            Informasi mengenai SMK Negeri 1 Cijati
        </p>


        <div class="cards">

            <!-- GURU -->
            <div class="card">

                <h3>
                    Guru
                </h3>

                <p>
                    52
                </p>

            </div>


            <!-- SISWA -->
            <div class="card">

                <h3>
                    Siswa
                </h3>

                <p>
                    692
                </p>

            </div>


            <!-- JURUSAN -->
            <div class="card">

                <h3>
                    Jurusan
                </h3>

                <p>
                    4
                </p>

            </div>


            <!-- EKSTRAKURIKULER -->
            <div class="card">

                <h3>
                    Ekstrakurikuler
                </h3>

                <p>
                    10
                </p>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <p>
            © 2026 SMKN 1 CIJATI. Semua Hak Dilindungi.
        </p>

    </footer>

</body>
</html>