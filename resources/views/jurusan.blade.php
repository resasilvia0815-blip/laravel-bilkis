@extends('layouts.app')

@section('title', 'Jurusan')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    .jurusan-page {
        background: #f5f7fb;
        min-height: 100vh;
        padding: 50px 20px 70px;
    }

    .jurusan-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* HEADER */

    .jurusan-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .jurusan-header h1 {
        color: #0d47a1;
        font-size: 38px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .jurusan-header p {
        color: #777;
        font-size: 16px;
        margin: 0;
    }

    /* GRID */

    .jurusan-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    /* CARD */

    .jurusan-card {
        background: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        border-top: 5px solid #0d47a1;
        transition: 0.3s ease;
    }

    .jurusan-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.12);
    }

    .jurusan-card-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background: #e8edf5;
        display: block;
    }

    .jurusan-card-body {
        padding: 25px 30px 30px;
    }

    .jurusan-card-body .singkatan {
        display: inline-block;
        background: #e8edf5;
        color: #0d47a1;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        padding: 5px 12px;
        border-radius: 20px;
        margin-bottom: 12px;
    }

    .jurusan-card-body h2 {
        color: #0d47a1;
        font-size: 22px;
        margin: 0 0 12px;
    }

    .jurusan-card-body p {
        color: #555;
        font-size: 15px;
        line-height: 1.7;
        margin: 0;
    }

    /* EMPTY STATE */

    .jurusan-empty {
        grid-column: 1 / -1;
        background: #ffffff;
        border-radius: 15px;
        padding: 50px 30px;
        text-align: center;
        color: #777;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    /* RESPONSIVE */

    @media (max-width: 768px) {

        .jurusan-page {
            padding: 35px 15px 50px;
        }

        .jurusan-header h1 {
            font-size: 30px;
        }

        .jurusan-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {

        .jurusan-header h1 {
            font-size: 26px;
        }

        .jurusan-header p {
            font-size: 14px;
        }

        .jurusan-card-body {
            padding: 20px;
        }
    }
</style>


<div class="jurusan-page">

    <div class="jurusan-container">

        <!-- =========================
             HEADER
        ========================== -->

        <div class="jurusan-header">

            <h1>
                Jurusan
            </h1>

            <p>
                Daftar program keahlian yang tersedia di SMK Negeri 1 Cijati
            </p>

        </div>


        <!-- =========================
             DAFTAR JURUSAN
        ========================== -->

        <div class="jurusan-grid">

            @forelse ($jurusans as $jurusan)

                <div class="jurusan-card">

                    @if (!empty($jurusan->foto))
                        <img
                            src="{{ asset('storage/' . $jurusan->foto) }}"
                            alt="{{ $jurusan->nama_jurusan }}"
                            class="jurusan-card-img"
                        >
                    @endif

                    <div class="jurusan-card-body">

                        @if (!empty($jurusan->singkatan))
                            <span class="singkatan">
                                {{ $jurusan->singkatan }}
                            </span>
                        @endif

                        <h2>
                            {{ $jurusan->nama_jurusan }}
                        </h2>

                        <p>
                            {{ $jurusan->deskripsi }}
                        </p>

                    </div>

                </div>

            @empty

                <div class="jurusan-empty">
                    Belum ada data jurusan.
                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection
