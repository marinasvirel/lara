<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'all']);
Route::get('/user/del/{id}', [UserController::class, 'myDelete']);
Route::match(['get', 'post'], '/create', [UserController::class, 'create']);
Route::match(['get', 'post'], '/user/update/{id}', [UserController::class, 'myUpdate']);

Route::get('/posts', [PostController::class, 'all']);
Route::get('/post/{id}', [PostController::class, 'one']);