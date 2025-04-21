<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'show']);
Route::get('/user', [UserController::class, 'one']);
Route::get('/names', [UserController::class, 'names']);
Route::get('/createOne', [UserController::class, 'createOne']);
Route::get('/createOneId', [UserController::class, 'createOneId']);
Route::get('/createSome', [UserController::class, 'createSome']);
