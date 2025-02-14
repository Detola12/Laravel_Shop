<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware('guest')->group(function (){

    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'verify'])->name('auth.verify');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'store'])->name('auth.store');

});


Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout')->middleware('auth');
