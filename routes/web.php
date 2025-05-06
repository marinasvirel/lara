<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', [UserController::class, 'show']);
// Route::get('/user', [UserController::class, 'one']);

Route::get('/users', [ProfileController::class, 'show']);
Route::get('/user', [ProfileController::class, 'one']);

Route::get('/countries', [CountryController::class, 'show']);

Route::get('/create', [UserController::class, 'create']);
Route::get('/update', [UserController::class, 'update']);
Route::get('/delOne', [UserController::class, 'delOne']);
Route::get('/delSome', [UserController::class, 'delSome']);
Route::get('/recovery', [UserController::class, 'recovery']);
