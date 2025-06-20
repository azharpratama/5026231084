<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    // Method untuk menampilkan semua data nilai
    public function index()
    {
        // Mengambil data dari table nilai
        $nilai = DB::table('nilai')->get();

        // Mengirim data nilai ke view index
        return view('nilai.index', ['nilai' => $nilai]);
    }

    // Method untuk menampilkan view form tambah nilai
    public function tambah()
    {
        // Memanggil view tambah
        return view('nilai.tambah');
    }

    // Method untuk insert data ke table nilai
    public function store(Request $request)
    {
        // Insert data ke table nilai
        DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);

        // Alihkan halaman ke halaman nilai
        return redirect('/eas');
    }
}
