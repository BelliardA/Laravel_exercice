<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('artist', ArtistController::class);
Route::resource('country', CountryController::class);
Route::resource('movie', MovieController::class);