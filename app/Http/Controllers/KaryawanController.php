<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Method untuk menampilkan semua data karyawan
    public function index()
    {
        // Mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->get();

        // Mengirim data karyawan ke view index
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    // Method untuk menampilkan view form tambah karyawan
    public function tambah()
    {
        // Memanggil view tambah
        return view('karyawan.tambah');
    }

    // Method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // Insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // Alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // Method untuk hapus data karyawan
    public function hapus($id)
    {
        // Menghapus data karyawan berdasarkan kodepegawai yang dipilih
        DB::table('karyawan')->where('kodepegawai', $id)->delete();

        // Alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }
}
