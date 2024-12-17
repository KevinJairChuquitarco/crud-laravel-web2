<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::resource('animales',AnimalController::class);

Route::get('/', function () {
    return view('welcome');
});


