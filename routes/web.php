<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('computers', \App\Http\Controllers\ComputerController::class);
 