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
    
    return view('guest.home', ['comic' => config('comics')]);
})->name("home");

Route::get('comic/{id}', function ($id) {
    $collection = collect(config("comics"));
    $product = $collection->where('id', $id);

    if ($product->count() === 0) {
        abort(404);
    }

    $singleComic = '';
    foreach ($product as $key => $value) {
        $singleComic = $value;
    }
    
    return view('guest.comic', ["comic" => $singleComic]);
})->name("comic");



Route::get('/characters', function () {

    return view('guest.characters');
})->name("characters");

Route::get('/movies', function () {

    return view('guest.movie');
})->name("movies");

Route::get('/tv', function () {

    return view('guest.tv');
})->name("tv");

Route::get('/games', function () {

    return view('guest.game');
})->name("games");

Route::get('/collectibles', function () {

    return view('guest.collectible');
})->name("collectibles");

Route::get('/videos', function () {

    return view('guest.video');
})->name("videos");

Route::get('/fans', function () {

    return view('guest.fan');
})->name("fans");

Route::get('/news', function () {

    return view('guest.new');
})->name("news");

Route::get('/shop', function () {

    return view('guest.shop');
})->name("shop");
