<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/', function () {
    return view('dukungan');
})->name('dukungan');

Route::get('/', function () {
    return view('edukasi');
})->name('edukasi');

Route::get('/', function () {
    return view('forum');
})->name('forum');

