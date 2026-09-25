<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ekstrakurikulers')->insert([
            [
                'nama_ekstrakurikuler' => 'PMR',
                'deskripsi' => 'Kegiatan Palang Merah Remaja.',
            ],
            [
                'nama_ekstrakurikuler' => 'Rohis',
                'deskripsi' => 'Kegiatan kerohanian Islam siswa.',
            ],
            [
                'nama_ekstrakurikuler' => 'Pramuka',
                'deskripsi' => 'Kegiatan kepanduan siswa.',
            ],
            [
                'nama_ekstrakurikuler' => 'Paskibra',
                'deskripsi' => 'Kegiatan kedisiplinan dan baris-berbaris.',
            ],
            [
                'nama_ekstrakurikuler' => 'Bahasa Jepang',
                'deskripsi' => 'Kegiatan bahasa dan budaya Jepang.',
            ],
            [
                'nama_ekstrakurikuler' => 'Karawitan',
                'deskripsi' => 'Kegiatan seni musik tradisional.',
            ],
            [
                'nama_ekstrakurikuler' => 'Futsal',
                'deskripsi' => 'Kegiatan olahraga futsal.',
            ],
            [
                'nama_ekstrakurikuler' => 'Voli',
                'deskripsi' => 'Kegiatan olahraga bola voli.',
            ],
            [
                'nama_ekstrakurikuler' => 'Marching Band',
                'deskripsi' => 'Kegiatan musik dan baris-berbaris.',
            ],
            [
                'nama_ekstrakurikuler' => 'Sinema',
                'deskripsi' => 'Kegiatan seni dan perfilman.',
            ],
        ]);
    }
}