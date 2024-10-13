<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('login', [UserController::class, 'login']);

// Route::middleware('auth')->group(function () {
Route::group(['middleware' => ['auth:api']], function () {
   
});
