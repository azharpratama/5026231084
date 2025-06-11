<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Method untuk menampilkan semua data keranjang belanja
    public function index()
    {
        // Mengambil data dari table keranjangbelanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        // Mengirim data keranjangbelanja ke view index
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // Method untuk menampilkan view form tambah keranjangbelanja
    public function beli()
    {
        // Memanggil view beli
        return view('keranjangbelanja.beli');
    }

    // Method untuk insert data ke table keranjangbelanja
    public function store(Request $request)
    {
        // Insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        // Alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }

    // Method untuk hapus data keranjangbelanja
    public function batal($id)
    {
        // Menghapus data keranjangbelanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // Alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
}
