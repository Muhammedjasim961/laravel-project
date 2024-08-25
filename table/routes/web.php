<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/search', function () {
    return view('search');
});
//
Route::get('/search/results', ['search'])->name('search.results');
