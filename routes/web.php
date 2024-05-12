<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SeanceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('artist', ArtistController::class);
Route::resource('country', CountryController::class);
Route::resource('movie', MovieController::class);
Route::resource('cinema', CinemaController::class);
Route::resource('salle', SalleController::class);
Route::resource('seance', SeanceController::class);