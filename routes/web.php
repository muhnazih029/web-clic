<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('helloworld');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/home', [AuthController::class, 'index'])->name('userLogin');
    Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');
});
