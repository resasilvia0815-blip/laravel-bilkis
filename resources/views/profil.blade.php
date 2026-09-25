@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    .profil-page {
        background: #f5f7fb;
        min-height: 100vh;
        padding: 50px 20px 70px;
    }

    .profil-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* HEADER */

    .profil-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .profil-header h1 {
        color: #0d47a1;
        font-size: 38px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .profil-header p {
        color: #777;
        font-size: 16px;
        margin: 0;
    }

    /* GRID */

    .profil-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        margin-bottom: 25px;
    }

    /* CARD */

    .profil-card {
        background: #ffffff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        border-top: 5px solid #0d47a1;
        margin-bottom: 25px;
    }

    .profil-grid .profil-card {
        margin-bottom: 0;
    }

    .profil-card h2 {
        color: #0d47a1;
        font-size: 24px;
        margin: 0 0 25px;
        padding-bottom: 13px;
        border-bottom: 2px solid #e8edf5;
    }

    /* INFORMASI */

    .info-item {
        margin-bottom: 18px;
    }

    .info-item:last-child {
        margin-bottom: 0;
    }

    .info-item strong {
        display: block;
        color: #222;
        font-size: 15px;
        margin-bottom: 5px;
    }

    .info-item span {
        color: #555;
        font-size: 16px;
        line-height: 1.6;
    }

    /* VISI & MISI */

    .visi-misi-text {
        color: #555;
        font-size: 16px;
        line-height: 1.9;
        text-align: justify;
        margin: 0;
    }

    /* DATA SEKOLAH */

    .data-sekolah {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .data-box {
        background: #f4f7fc;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        border: 1px solid #e3e9f3;
    }

    .data-box h3 {
        color: #0d47a1;
        font-size: 17px;
        margin: 0 0 12px;
    }

    .data-box strong {
        color: #222;
        font-size: 35px;
        font-weight: bold;
    }

    /* HOVER */

    .profil-card {
        transition: 0.3s ease;
    }

    .profil-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.12);
    }

    .data-box {
        transition: 0.3s ease;
    }

    .data-box:hover {
        transform: translateY(-3px);
        background: #eef4ff;
    }

    /* RESPONSIVE */

    @media (max-width: 768px) {

        .profil-page {
            padding: 35px 15px 50px;
        }

        .profil-header h1 {
            font-size: 30px;
        }

        .profil-grid {
            grid-template-columns: 1fr;
        }

        .data-sekolah {
            grid-template-columns: 1fr;
        }

        .profil-card {
            padding: 23px;
        }

        .profil-card h2 {
            font-size: 21px;
        }

        .visi-misi-text {
            text-align: left;
        }
    }

    @media (max-width: 480px) {

        .profil-header h1 {
            font-size: 26px;
        }

        .profil-header p {
            font-size: 14px;
        }

        .profil-card {
            padding: 20px;
        }

        .data-box strong {
            font-size: 30px;
        }
    }
</style>


<div class="profil-page">

    <div class="profil-container">

        <!-- =========================
             HEADER
        ========================== -->

        <div class="profil-header">

            <h1>
                Profil Sekolah
            </h1>

            <p>
                Informasi mengenai SMK Negeri 1 Cijati
            </p>

        </div>


        <!-- =========================
             INFORMASI SEKOLAH
        ========================== -->

        <div class="profil-grid">

            <!-- INFORMASI SEKOLAH -->

            <div class="profil-card">

                <h2>
                    Informasi Sekolah
                </h2>


                <div class="info-item">

                    <strong>
                        Nama Sekolah
                    </strong>

                    <span>
                        {{ $profil->nama_sekolah ?? 'Nama Sekolah' }}
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Akreditasi
                    </strong>

                    <span>
                        {{ $profil->akreditasi ?? 'A' }}
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Tahun Berdiri
                    </strong>

                    <span>
                        {{ $profil->tahun_berdiri ?? '2006' }}
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Kepala Sekolah
                    </strong>

                    <span>
                        {{ $profil->kepala_sekolah ?? 'A.RAHMAT DIMIYATI.S.PD.M.PD' }}
                    </span>

                </div>

            </div>


            <!-- =========================
                 KONTAK SEKOLAH
            ========================== -->

            <div class="profil-card">

                <h2>
                    Kontak Sekolah
                </h2>


                <div class="info-item">

                    <strong>
                        Alamat
                    </strong>

                    <span>
                        {{ $profil->alamat ?? 'JL. RAYA CIJATI, Cijati, Kec. Cijati, Kab. Cianjur, Jawa Barat.' }}
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Telepon
                    </strong>

                    <span>
                        {{ $profil->telepon ?? '081234567890' }}
                    </span>

                </div>


                <div class="info-item">

                    <strong>
                        Email
                    </strong>

                    <span>
                        {{ $profil->email ?? 'smkn.1cijati@yahoo.co.id' }}
                    </span>

                </div>

            </div>

        </div>


        <!-- =========================
             VISI
        ========================== -->

        <div class="profil-card">

            <h2>
                Visi
            </h2>

            <p class="visi-misi-text">

                {{ $profil->visi ?? 'Terwujuddnya lulusan KEREN dan BERSINERGI melalui pembelajaran mendalam,
                penguatan karakter Pancawaluya,
                serta kolaborasi aktif dengan dunia kerja dan industri.”.' }}

            </p>

        </div>


        <!-- =========================
             MISI
        ========================== -->

        <div class="profil-card">

            <h2>
                Misi
            </h2>

            <p class="visi-misi-text">

                {{ $profil->misi ?? 'Menyelenggarakan pembelajaran mendalam yang berpusat pada peserta didik untuk mengembangkan kompetensi secara optimal. 
                Menumbuhkan karakter religius, energik, dan nasionalis dalam kehidupan sehari-hari melalui penguatan nilai-nilai Pancawaluya. 
                Mengembangkan lulusan yang kompeten dan berdaya saing sesuai dengan kebutuhan dunia kerja dan perkembangan zaman. 
                Menanamkan jiwa kewirausahaan (entrepreneurship) melalui kegiatan pembelajaran dan praktik nyata. 
                Menumbuhkan integritas, etos kerja, dan tanggung jawab melalui pembiasaan, keteladanan, dan budaya sekolah yang positif. 
                Menguatkan kolaborasi dan kemitraan aktif dengan dunia kerja dan industri untuk meningkatkan relevansi dan kualitas lulusan..' }}

            </p>

        </div>


        <!-- =========================
             DATA SEKOLAH
        ========================== -->

        <div class="profil-card">

            <h2>
                Data Sekolah
            </h2>


            <div class="data-sekolah">

                <!-- JUMLAH SISWA -->

                <div class="data-box">

                    <h3>
                        Jumlah Siswa
                    </h3>

                    <strong>
                        {{ $profil->jumlah_siswa ?? 663 }}
                    </strong>

                </div>


                <!-- JUMLAH GURU -->

                <div class="data-box">

                    <h3>
                        Jumlah Guru
                    </h3>

                    <strong>
                        {{ $profil->jumlah_guru ?? 51 }}
                    </strong>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection