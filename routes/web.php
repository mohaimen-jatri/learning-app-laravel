<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('user.login');
Route::get('/signup', [AuthController::class, 'signup'])->name('user.signup');
