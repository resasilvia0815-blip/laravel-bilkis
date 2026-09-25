@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')

<style>
    .eskul-page {
        padding: 50px 20px;
        background: #f5f7fb;
        min-height: 100vh;
    }

    .eskul-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .eskul-header h1 {
        font-size: 38px;
        color: #1e3a8a;
        margin-bottom: 10px;
    }

    .eskul-header p {
        color: #666;
        font-size: 17px;
    }

    .eskul-container {
        max-width: 1150px;
        margin: auto;
    }

    .eskul-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .eskul-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 18px rgba(0,0,0,0.10);
        transition: 0.3s;
    }

    .eskul-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .eskul-card img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        display: block;
    }

    .eskul-info {
        padding: 22px;
    }

    .eskul-info h2 {
        margin: 0 0 12px;
        color: #1e3a8a;
        font-size: 23px;
    }

    .eskul-info p {
        margin: 0;
        color: #666;
        line-height: 1.7;
        font-size: 15px;
    }

    @media (max-width: 900px) {
        .eskul-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .eskul-grid {
            grid-template-columns: 1fr;
        }

        .eskul-header h1 {
            font-size: 30px;
        }
    }
</style>


<div class="eskul-page">

    <div class="eskul-header">

        <h1>Ekstrakurikuler</h1>

        <p>
            Berbagai kegiatan ekstrakurikuler
            SMK Negeri 1 Cijati
        </p>

    </div>


    <div class="eskul-container">

        <div class="eskul-grid">

            <!-- PRAMUKA -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/pramuka.jpg') }}"
                    alt="Pramuka"
                >

                <div class="eskul-info">

                    <h2>Pramuka</h2>

                    <p>
                        Kegiatan Pramuka bertujuan untuk membentuk
                        siswa yang disiplin, mandiri, bertanggung
                        jawab, serta memiliki jiwa kerja sama.
                    </p>

                </div>

            </div>


            <!-- FUTSAL -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/futsal.jpg') }}"
                    alt="Futsal"
                >

                <div class="eskul-info">

                    <h2>Futsal</h2>

                    <p>
                        Kegiatan futsal membantu siswa mengembangkan
                        kemampuan olahraga, kerja sama tim,
                        sportivitas, dan kesehatan tubuh.
                    </p>

                </div>

            </div>


            <!-- PASKIBRA -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/paskibra.jpg') }}"
                    alt="Paskibra"
                >

                <div class="eskul-info">

                    <h2>Paskibra</h2>

                    <p>
                        Paskibra melatih kedisiplinan, kekompakan,
                        tanggung jawab, kepemimpinan, dan sikap
                        cinta tanah air.
                    </p>

                </div>

            </div>


            <!-- PMR -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/pmr.jpg') }}"
                    alt="PMR"
                >

                <div class="eskul-info">

                    <h2>PMR</h2>

                    <p>
                        Palang Merah Remaja merupakan kegiatan
                        yang mengajarkan kepedulian sosial,
                        kesehatan, dan pertolongan dasar.
                    </p>

                </div>

            </div>


            <!-- VOLI -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/voli.jpg') }}"
                    alt="Voli"
                >

                <div class="eskul-info">

                    <h2>Voli</h2>

                    <p>
                        Kegiatan bola voli melatih kemampuan
                        olahraga, kekompakan, kerja sama,
                        dan sportivitas siswa.
                    </p>

                </div>

            </div>


            <!-- ROHIS -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/rohis.jpg') }}"
                    alt="Rohis"
                >

                <div class="eskul-info">

                    <h2>Rohis</h2>

                    <p>
                        Kegiatan Rohis membantu siswa mengembangkan
                        kegiatan keagamaan, kebersamaan,
                        dan karakter positif.
                    </p>

                </div>

            </div>


            <!-- BAHASA JEPANG -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/bahasa-jepang.jpg') }}"
                    alt="Bahasa Jepang"
                >

                <div class="eskul-info">

                    <h2>Bahasa Jepang</h2>

                    <p>
                        Kegiatan bahasa dan budaya Jepang yang
                        mengasah kemampuan berbahasa asing serta
                        wawasan siswa tentang budaya Jepang.
                    </p>

                </div>

            </div>


            <!-- KARAWITAN -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/karawitan.jpg') }}"
                    alt="Karawitan"
                >

                <div class="eskul-info">

                    <h2>Karawitan</h2>

                    <p>
                        Kegiatan seni musik tradisional yang
                        melestarikan budaya daerah sekaligus
                        mengasah kepekaan seni siswa.
                    </p>

                </div>

            </div>


            <!-- MARCHING BAND -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/marching-band.jpg') }}"
                    alt="Marching Band"
                >

                <div class="eskul-info">

                    <h2>Marching Band</h2>

                    <p>
                        Kegiatan musik dan baris-berbaris yang
                        melatih kekompakan, kedisiplinan, dan
                        kreativitas siswa dalam bermusik.
                    </p>

                </div>

            </div>


            <!-- SINEMA -->
            <div class="eskul-card">

                <img
                    src="{{ asset('images/eskul/sinema.jpg') }}"
                    alt="Sinema"
                >

                <div class="eskul-info">

                    <h2>Sinema</h2>

                    <p>
                        Kegiatan seni dan perfilman yang mengasah
                        kreativitas siswa dalam produksi video
                        dan bercerita melalui gambar bergerak.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection