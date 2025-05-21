<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    public function hello()
    {
        return view("blog");
    }

    public function index(){
        $nama = "Azhar Aditya Pratama";
        $matkul = ["Pemrograman Web", "Data Lakehouse", "Pemodelan dan Analitika Prediktif"];
    	return view("biodata", ["nama" => $nama , "matakuliah" => $matkul]);
    }
}
