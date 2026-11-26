<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\Auth\LoginController;
use App\Http\Controllers\user\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('user.login');
Route::get('/signup', [RegisterController::class, 'index'])->name('user.signup');
