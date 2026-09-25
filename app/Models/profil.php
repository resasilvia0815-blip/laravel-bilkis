<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';

    protected $fillable = [
        'nama_sekolah',
        'akreditasi',
        'tahun_berdiri',
        'kepala_sekolah',
        'alamat',
        'telepon',
        'email',
        'visi',
        'misi',
        'sejarah',
        'logo',
        'jumlah_siswa',
        'jumlah_guru',
    ];
}