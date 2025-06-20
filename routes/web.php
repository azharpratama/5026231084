<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiControllerNew;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Route::get("hello", [Link::class, "hello"]);

Route::get("dosen", [Link::class, "index"]);

// route pegawai
// Route::get("/pegawai/{nama}", [PegawaiController::class, "index"]);
Route::get("/pegawai/", [PegawaiControllerNew::class, "index"]);
Route::get("/pegawai/tambah", [PegawaiControllerNew::class, "tambah"]);
Route::post('/pegawai/store', [PegawaiControllerNew::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiControllerNew::class, 'edit']);
Route::post('/pegawai/update', [PegawaiControllerNew::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiControllerNew::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiControllerNew::class, 'cari']);

Route::get('template', function () {
    return view('template');
});

Route::get("/formulir", [PegawaiController::class, "formulir"]);

Route::post("/formulir/proses", [PegawaiController::class, "proses"]);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// Routes for the Web Development Portfolio

Route::get("frontend", function () {
    return view("frontend.index");
});

Route::get("html", function () {
    return view("frontend.html.index");
});

Route::get("css", function () {
    return view("frontend.css.index");
});

Route::get("bootstrap", function () {
    return view("frontend.bootstrap.index");
});

Route::get("javascript", function () {
    return view("frontend.javascript.js1");
});

Route::get("javascript/js2", function () {
    return view("frontend.javascript.js2");
});

Route::get("linktree", function () {
    return view("frontend.linktree.index");
});

Route::get("danantara", function () {
    return view("frontend.danantara.index");
});

Route::get("ets", function () {
    return view("frontend.ets.index");
});

// Week 14 assignment
Route::get('/kue', [KueController::class, 'index']);
Route::get('/kue/tambah', [KueController::class, 'tambah']);
Route::post('/kue/store', [KueController::class, 'store']);
Route::get('/kue/edit/{id}', [KueController::class, 'edit']);
Route::post('/kue/update', [KueController::class, 'update']);
Route::get('/kue/hapus/{id}', [KueController::class, 'hapus']);
Route::get('/kue/cari', [KueController::class, 'cari']);

// Week 15 EAS exercise Laki-laki NRP Genap
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

// Keranjang Belanja routes
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

// Week 16 EAS nilai
Route::get('/eas', [NilaiController::class, 'index']);
Route::get('/eas/tambah', [NilaiController::class, 'tambah']);
Route::post('/eas/store', [NilaiController::class, 'store']);
