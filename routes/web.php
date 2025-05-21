<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
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

Route::get("hello", [Link::class,"hello"]);

Route::get("dosen", [Link::class,"index"]);

Route::get("/pegawai/{nama}", [PegawaiController::class, "index"]);

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
