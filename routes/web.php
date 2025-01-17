<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\UserController;

Route::post('/register', [UserController::class, 'store']);     