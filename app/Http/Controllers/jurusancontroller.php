<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;

class JurusanController
{
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan', compact('jurusans'));
    }
}