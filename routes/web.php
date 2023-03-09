<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');

    Route::resource('users', \App\Http\Controllers\UserController::class);

    Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.handle');

    Route::inertia('/login', 'LoginView')->name('login');
});
