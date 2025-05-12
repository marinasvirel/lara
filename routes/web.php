<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [UserController::class, 'form']);
Route::get('/user/{id}/{login}', [UserController::class, 'test']);
