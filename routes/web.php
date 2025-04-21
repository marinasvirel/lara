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
Route::get('/updateOne', [UserController::class, 'updateOne']);
Route::get('/updateSome', [UserController::class, 'updateSome']);
Route::get('/incOne', [UserController::class, 'incOne']);
Route::get('/decOne', [UserController::class, 'decOne']);
Route::get('/decSome', [UserController::class, 'decSome']);
