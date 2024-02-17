<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //
    public function homepage() {
        return view('home', [
            "title" => "Beranda",
        ]);
    }

    public function course() {
        return view('course', [
            "title" => "Course",
        ]);
    }

    public function books() {
        return view('books', [
            "title" => "Buku & Kamus",
        ]);
    }

    public function about() {
        return view("about", [
            "title" => "Tentang Kami"
        ]);
    }
}
