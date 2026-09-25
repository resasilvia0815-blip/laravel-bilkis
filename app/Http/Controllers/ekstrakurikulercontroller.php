<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EkstrakurikulerController
{
    public function index()
    {
        $ekstrakurikuler = DB::table('ekstrakurikulers')->get();

        return view('ekstrakurikuler', compact('ekstrakurikuler'));
    }
}