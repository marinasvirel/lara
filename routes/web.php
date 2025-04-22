<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'show']);
Route::get('/user', [UserController::class, 'one']);
Route::get('/create', [UserController::class, 'create']);
Route::get('/update', [UserController::class, 'update']);
Route::get('/delSome', [UserController::class, 'delSome']);
