@extends('layouts.app')

@section('content')

<h1>Guru</h1>

<div class="guru-container">

    @forelse($gurus as $guru)

        <div class="guru-card">

            <h2>{{ $guru->nama }}</h2>

            <p>
                <strong>NIS:</strong>
                {{ $guru->nis ?? '-' }}
            </p>

            <p>
                <strong>Mata Pelajaran:</strong>
                {{ $guru->mata_pelajaran }}
            </p>

        </div>

    @empty

        <div class="guru-card">
            <h2>Data Guru</h2>
            <p>Belum ada data guru.</p>
        </div>

    @endforelse

</div>

<style>
    .guru-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .guru-card {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.10);
    }

    .guru-card h2 {
        color: #151b4f;
        margin-bottom: 15px;
    }

    .guru-card p {
        margin: 10px 0;
        color: #555;
    }
</style>

@endsection