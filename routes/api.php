<?php

use App\Http\Controllers\ComputerController;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('computers', [ComputerController::class,'index'])->name('api.v1.computers.index');
Route::post('computers', [ComputerController::class,'store'])->name('api.v1.computers.store');
Route::get('computers/{computer}', [ComputerController::class,'store'])-> name('api.v1.computers.show');


