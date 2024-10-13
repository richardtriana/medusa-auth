<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Route::get('/', function () {
//     return view('app');
// })->middleware('guest');

Route::get('/', function () {
    return view('home');
});

Route::post('/check-directory', [AuthController::class, 'checkDirectory'])->name('check.directory');