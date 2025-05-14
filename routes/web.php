<?php

use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

// Routes for the portfolio sections
Route::get('html', function () {
    return view('html.index');
});

Route::get('css', function () {
    return view('css.index');
});

Route::get('bootstrap', function () {
    return view('bootstrap.index');
});

Route::get('javascript', function () {
    return view('javascript.js1');
});

Route::get('javascript/js2', function () {
    return view('javascript.js2');
});

Route::get('linktree', function () {
    return view('linktree.index');
});

Route::get('danantara', function () {
    return view('danantara.index');
});

Route::get('ets', function () {
    return view('ets.index');
});
