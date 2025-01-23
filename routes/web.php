<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda', 'posts' => Post::all()]);
});

Route::get('/profil-singkat', function () {
    return view('profil-singkat', ['title' => 'Profil Singkat']);
});

Route::get('/manajemen-sekolah', function () {
    return view('manajemen-sekolah', ['title' => 'Manajemen Sekolah']);
});

Route::get('/pendanaan', function () {
    return view('pendanaan', ['title' => 'BOS dan BOP', 'posts' => Post::all()]);
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
