<?php

use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('computers', ComputerController::class);
 Route::get('computers', [ComputerController::class,'index'])->name('api.v1.categories.index');
 Route::post('computers', [ComputerController::class,'store'])->name('api.v1.categories.store');
 Route::get('computers/{computer}', [ComputerController::class,'show'])->name('api.v1.categories.show');