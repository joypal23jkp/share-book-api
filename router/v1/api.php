<?php

use App\Http\Controllers\Api\V1\User\Auth\RegisterController;
use App\Http\Controllers\Api\V1\User\Book\BookIndexController;
use App\Http\Controllers\Api\V1\User\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'index']);


Route::post('login', 'User\Auth\LoginController');
Route::post('register', 'User\Auth\RegisterController');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('books', [BookIndexController::class]);
});

