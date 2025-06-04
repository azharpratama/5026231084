<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiControllerNew;
use App\Http\Controllers\BlogController;

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
