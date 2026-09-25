@extends('layouts.app')

@section('content')

<style>

    .hero {
        background: linear-gradient(
            rgba(21, 27, 79, 0.85),
            rgba(21, 27, 79, 0.85)
        ),
        url('{{ asset('images/gerbang.jpeg') }}')
        center/cover;

        min-height: 500px;

        display: flex;
        align-items: center;
        justify-content: center;

        text-align: center;
        color: white;

        padding: 50px 20px;
    }

    .hero-content {
        max-width: 850px;
    }

    .hero h1 {
        font-size: 45px;
        margin-bottom: 20px;
    }

    .hero h2 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 18px;
        line-height: 1.8;
    }

    .btn {
        display: inline-block;
        margin-top: 30px;
        padding: 13px 30px;

        background: white;
        color: #151b4f;

        text-decoration: none;
        border-radius: 7px;

        font-weight: bold;
    }

    /* SAMBUTAN */

    .section {
        padding: 70px 30px;
        text-align: center;
    }

    .section h2 {
        color: #151b4f;
        font-size: 32px;
        margin-bottom: 20px;
    }

    .section > p {
        max-width: 850px;
        margin: auto;
        line-height: 1.8;
        color: #666;
    }

    /* CARD */

    .cards {
        max-width: 1100px;
        margin: 40px auto 0;

        display: flex;
        justify-content: center;
        gap: 25px;

        flex-wrap: wrap;
    }

    .card {
        width: 300px;

        background: white;

        padding: 30px;

        border-radius: 12px;

        box-shadow: 0 3px 12px rgba(0,0,0,0.10);
    }

    .card h3 {
        color: #151b4f;
        font-size: 23px;
        margin-bottom: 15px;
    }

    .card p {
        color: #666;
        line-height: 1.7;
    }

    .card a {
        display: inline-block;
        margin-top: 20px;

        color: #151b4f;
        font-weight: bold;
        text-decoration: none;
    }

    /* VISI MISI */

    .visi-misi {
        background: #fff;

        padding: 70px 30px;

        text-align: center;
    }

    .visi-misi h2 {
        color: #151b4f;
        font-size: 32px;
        margin-bottom: 35px;
    }

    .visi-misi-box {
        max-width: 1000px;
        margin: auto;

        display: flex;
        justify-content: center;
        gap: 25px;

        flex-wrap: wrap;
    }

    .visi,
    .misi {
        width: 450px;

        padding: 30px;

        background: #f5f5f5;

        border-radius: 10px;
    }

    .visi h3,
    .misi h3 {
        color: #151b4f;
        margin-bottom: 15px;
    }

    .visi p,
    .misi p {
        line-height: 1.8;
        color: #666;
    }

    /* DATA SEKOLAH */

    .data-sekolah {
        padding: 70px 30px;
        text-align: center;
    }

    .data-sekolah h2 {
        color: #151b4f;
        font-size: 32px;
        margin-bottom: 35px;
    }

    .data-box {
        max-width: 1000px;
        margin: auto;

        display: flex;
        justify-content: center;
        gap: 20px;

        flex-wrap: wrap;
    }

    .data {
        background: white;

        width: 210px;

        padding: 30px 20px;

        border-radius: 10px;

        box-shadow: 0 3px 10px rgba(0,0,0,0.10);
    }

    .data h3 {
        color: #151b4f;
        font-size: 30px;
        margin-bottom: 10px;
    }

    .data p {
        color: #666;
    }

    /* KEGIATAN */

    .kegiatan {
        background: white;

        padding: 70px 30px;

        text-align: center;
    }

    .kegiatan h2 {
        color: #151b4f;
        font-size: 32px;
        margin-bottom: 35px;
    }

    .kegiatan-box {
        max-width: 1000px;
        margin: auto;

        display: flex;
        justify-content: center;
        gap: 25px;

        flex-wrap: wrap;
    }

    .kegiatan-item {
        width: 280px;

        padding: 30px;

        background: #f5f5f5;

        border-radius: 10px;
    }

    .kegiatan-item h3 {
        color: #151b4f;
        margin-bottom: 15px;
    }

    .kegiatan-item p {
        color: #666;
        line-height: 1.7;
    }

    @media (max-width: 700px) {

        .hero h1 {
            font-size: 32px;
        }

        .hero h2 {
            font-size: 22px;
        }

        .visi,
        .misi {
            width: 100%;
        }

        .card {
            width: 100%;
            max-width: 350px;
        }
    }

</style>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-content">

        <h1>
         SMK NEGERI 1 CIJATI
        </h1>

        <h2>
    
        </h2>

        <p>
            Website resmi SMK Negeri 1 Cijati.
            Temukan berbagai informasi mengenai
            sekolah, jurusan, guru, ekstrakurikuler
        </p>

    </div>

</section>

<!-- ================= INFORMASI ================= -->

<section class="section">

    <h2>
        Informasi Sekolah
    </h2>

    <p>
        Silakan pilih menu untuk mendapatkan informasi
        lebih lengkap mengenai SMK Negeri 1 Cijati
    </p>


    <div class="cards">

        <!-- PROFIL -->

        <div class="card">

            <h3>
                Profil Sekolah
            </h3>

            <p>
                Informasi mengenai visi, misi,
                dan identitas SMK Negeri 1 Cijati.
            </p>

            <a href="{{ url('/profil') }}">
                Lihat Profil →
            </a>

        </div>


        <!-- GURU -->

        <div class="card">

            <h3>
                Guru
            </h3>

            <p>
                Lihat informasi mengenai guru dan
                tenaga pendidik yang ada di sekolah.
            </p>

            <a href="{{ url('/guru') }}">
                Lihat Guru →
            </a>

        </div>


        <!-- JURUSAN -->

        <div class="card">

            <h3>
                Jurusan
            </h3>

            <p>
                Lihat daftar jurusan dan program
                keahlian yang tersedia di sekolah.
            </p>

            <a href="{{ url('/jurusan') }}">
                Lihat Jurusan →
            </a>

        </div>


        <!-- EKSTRAKURIKULER -->

        <div class="card">

            <h3>
                Ekstrakurikuler
            </h3>

            <p>
                Berbagai kegiatan ekstrakurikuler
                untuk mengembangkan minat dan bakat siswa.
            </p>

            <a href="{{ url('/ekstrakurikuler') }}">
                Lihat Ekstrakurikuler →
            </a>

        </div>


        </div>

    </div>

</section>


<!-- ================= DATA SEKOLAH ================= -->

<section class="data-sekolah">

    <h2>
        Data Sekolah
    </h2>

    <div class="data-box">

        <div class="data">

            <h3>
                SMK
            </h3>

            <p>
                Jenjang Pendidikan
            </p>

        </div>


        <div class="data">

            <h3>
                4
            </h3>

            <p>
                Jurusan
            </p>

        </div>


        <div class="data">

            <h3>
                51
            </h3>

            <p>
                Guru
            </p>

        </div>


        <div class="data">

            <h3>
                663
            </h3>

            <p>
                siswa
            </p>

        </div>

    </div>

</section>

@endsection