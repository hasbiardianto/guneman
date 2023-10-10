<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Beranda",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
    ]);
});

Route::get('/register', function () {
    return view('register',[
        "title" => "Register",
    ]);
});

Route::get('/galery', function () {
    return view('galery',[
        "title" => "Galery",
    ]);
});

Route::get('/course', function () {
    return view('course',[
        "title" => "Course",
    ]);
});