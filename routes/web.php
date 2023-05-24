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
    $db = config('db');
    return view('comics', compact('db'));
});

Route::get('/comics', function () {
    $db = config('db');
    return view('comics', compact('db'));
});

Route::get('/characters', function () {
    return view('characters');
});

Route::get('/tv', function () {
    return view('tv');
});

Route::get('/movie', function () {
    return view('movie');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/fans', function () {
    return view('fans');
});

Route::get('/movies', function () {
    return view('Movies');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/collectibles', function () {
    return view('collectibles');
});





