<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda', 'posts' => Post::all()]);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'Tentang']);
});

Route::get('/berita', function () {

    return view('berita', ['title' => 'Berita', 'posts' => Post::all()]);
});

Route::get('/berita/{post:slug}', function (Post $post) {

    return view('isi-berita', ['title' => 'Isi Berita', 'post' => $post]);
    return back();
});

Route::get('/fasilitas', function () {
    return view('fasilitas', ['title' => 'Fasilitas']);
});
