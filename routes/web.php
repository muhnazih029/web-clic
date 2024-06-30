<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('helloworld');
});
Route::get('/welcome', function () {
    return view('welcome');
});

