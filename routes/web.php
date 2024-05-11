<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['nama' => 'fadil']);
});

Route::get('/home', function () {
    return view('home', );
});

