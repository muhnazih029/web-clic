<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscussionController;

Route::get('/', function () {
    return view('helloworld');
});
Route::get('/test', function () {
    return view('test');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login');
    Route::resource('events', EventController::class);
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', [AuthController::class, 'index'])->name('userLogin');
    Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');
    Route::resource('discussions', DiscussionController::class);
    Route::resource('events', EventController::class);
    // Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');

});
