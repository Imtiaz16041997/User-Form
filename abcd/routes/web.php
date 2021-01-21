<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);


Route::get('/posts', function () {
    return view('posts.index');
});
