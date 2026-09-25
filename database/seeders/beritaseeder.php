<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
                'judul' => 'Kegiatan Sekolah Tahun 2026',
                'isi' => 'Sekolah melaksanakan berbagai kegiatan untuk meningkatkan prestasi siswa.',
            ],
            [
                'judul' => 'Prestasi Siswa',
                'isi' => 'Siswa berhasil meraih prestasi dalam berbagai perlombaan.',
            ],
        ]);
    }
}