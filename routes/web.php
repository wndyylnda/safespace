<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');


