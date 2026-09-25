<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GuruController
{
    public function index()
    {
        $gurus = DB::table('gurus')->get();

        return view('guru', compact('gurus'));
    }
}