<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        Guru::create([
            'nama' => 'Budi Santoso',
            'nip' => '198501012010011001',
            'jabatan' => 'Kepala Sekolah',
        ]);

        Guru::create([
            'nama' => 'Siti Aminah',
            'nip' => '198702152012022002',
            'jabatan' => 'Guru Matematika',
        ]);

        Guru::create([
            'nama' => 'Andi Wijaya',
            'nip' => '199003202015031003',
            'jabatan' => 'Guru Bahasa Indonesia',
        ]);

        Guru::create([
            'nama' => 'Dewi Lestari',
            'nip' => '199105102016042004',
            'jabatan' => 'Guru Bahasa Inggris',
        ]);
    }
}