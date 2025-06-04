<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KueController extends Controller
{
    public function index()
    {
        // mengambil data dari table kue
        // $kue = DB::table('kue')->get();

        $kue = DB::table('kue')->paginate(10); // pagination

        // mengirim data kue ke view index
        return view('kue.index', ['kue' => $kue]);
    }

    // method untuk menampilkan view form tambah kue
    public function tambah()
    {
        // memanggil view tambah
        return view('kue.tambah');
    }

    // method untuk insert data ke table kue
    public function store(Request $request)
    {
        // insert data ke table kue
        DB::table('kue')->insert([
            'merkkue' => $request->merkkue,
            'hargakue' => $request->hargakue,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman kue
        return redirect('/kue');
    }

    // method untuk edit data kue
    public function edit($id)
    {
        // mengambil data kue berdasarkan id yang dipilih
        $kue = DB::table('kue')->where('ID', $id)->get();
        // passing data kue yang didapat ke view edit.blade.php
        return view('kue.edit', ['kue' => $kue]);
    }

    // update data kue
    public function update(Request $request)
    {
        // update data kue
        DB::table('kue')->where('ID', $request->ID)->update([
            'merkkue' => $request->merkkue,
            'hargakue' => $request->hargakue,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman kue
        return redirect('/kue');
    }

    // method untuk hapus data kue
    public function hapus($id)
    {
        // menghapus data kue berdasarkan id yang dipilih
        DB::table('kue')->where('ID', $id)->delete();

        // alihkan halaman ke halaman kue
        return redirect('/kue');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table kue sesuai pencarian data
        $kue = DB::table('kue')
            ->where('merkkue', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data kue ke view index
        return view('kue.index', ['kue' => $kue, 'cari' => $cari]);
    }
}
