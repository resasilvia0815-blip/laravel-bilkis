<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profils')->insert([
            [
                'judul' => 'Profil Sekolah',
                'deskripsi' => 'Sekolah merupakan lembaga pendidikan yang berkomitmen memberikan pendidikan terbaik kepada siswa.',
            ],
        ]);
    }
}