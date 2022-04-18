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

Route::get('/rak-saya', function () {
    return view('rak_saya');
});

Route::get('/berita', function () {
    return view('daftar_berita');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/daftar-buku', function () {
    return view('daftar_buku');
});

Route::get('/isi-berita', function () {
    return view('isi_berita');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/sign-up', function () {
    return view('auth/sign-up');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/change-password', function () {
    return view(' change-password');
});

Route::get('/isi-buku', function () {
    return view('isi-buku');
});

Route::get('/keterangan-buku', function () {
    return view('keterangan-buku');
});

Route::get('/notifikasi', function () {
    return view('notifikasi');
});

Route::get('/permintaan-buku', function () {
    return view('permintaan_buku');
});

Route::get('/profil', function () {
    return view('profil');
});