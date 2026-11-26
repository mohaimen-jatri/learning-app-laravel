<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\Auth\LoginController;
use App\Http\Controllers\user\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('user.login');
    Route::post('/login', [LoginController::class, 'login'])->name('user.login.submit');
    Route::get('/signup', [RegisterController::class, 'index'])->name('user.signup');
    Route::post('/signup', [RegisterController::class, 'store'])->name('user.signup.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('user.logout');
});
