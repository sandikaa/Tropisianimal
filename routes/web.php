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

Route::get('/', function () {
    return view('home', [
        'title' => "Home",
        'jumbojudul' => "hewan <br> tropis di dunia",
        'jumboisi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, minus provident! Laborum sequi incidunt magni, animi quidem deleniti nihil! Obcaecati accusamus ducimus quis quibusdam autem?"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        'title' => "Tentang",
        'jumbojudul' => "Tentang Kami",
        'jumboisi' => ""
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => "Berita",
        'jumbojudul' => "Berita",
        'jumboisi' => ""
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        'title' => "Galeri",
        'jumbojudul' => "Galeri",
        'jumboisi' => ""
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => "Kontak",
        'jumbojudul' => "Kontak Kami",
        'jumboisi' => ""
    ]);
});
