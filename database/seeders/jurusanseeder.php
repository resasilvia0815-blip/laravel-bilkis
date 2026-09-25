<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Menjalankan seeder untuk tabel jurusans.
     */
    public function run(): void
    {
        // Menghapus seluruh data jurusan yang lama
        DB::table('jurusans')->delete();

        // Memasukkan data jurusan
        DB::table('jurusans')->insert([

            // =========================
            // JURUSAN PPLG
            // =========================
            [
                'nama_jurusan' => 'Pengembangan Perangkat Lunak dan Gim',
                'singkatan'    => 'PPLG',
                'foto'         => 'pplg.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari pengembangan aplikasi, website, dan gim, mulai dari perancangan, pemrograman, hingga pengujian perangkat lunak.',
            ],

            // =========================
            // JURUSAN TKR
            // =========================
            [
                'nama_jurusan' => 'Teknik Kendaraan Ringan',
                'singkatan'    => 'TKR',
                'foto'         => 'tkr.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari perawatan, perbaikan, dan pemeliharaan kendaraan bermotor roda empat.',
            ],

            // =========================
            // JURUSAN APHP
            // =========================
            [
                'nama_jurusan' => 'Agribisnis Pengolahan Hasil Pertanian',
                'singkatan'    => 'APHP',
                'foto'         => 'aphp.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari teknik pengolahan hasil pertanian menjadi produk pangan yang bernilai jual dan berkualitas.',
            ],

            // =========================
            // JURUSAN BDP
            // =========================
            [
                'nama_jurusan' => 'Bisnis Daring dan Pemasaran',
                'singkatan'    => 'BDP',
                'foto'         => 'bdp.jpg',
                'deskripsi'    => 'Jurusan yang mempelajari strategi pemasaran, bisnis online, dan manajemen penjualan produk maupun jasa.',
            ],

        ]);
    }
}