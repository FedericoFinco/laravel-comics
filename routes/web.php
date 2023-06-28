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
    $links = config('store.links');
    $footerCols = config('store.footerCols');
    $footerSocialMedias = config('store.footerSocialMedias');
    return view('welcome', compact('links','footerCols','footerSocialMedias'));
});

Route::get('/otherpage', function () {
    $links = config('store.someLinks');
    return view('other', compact('links'));
});
