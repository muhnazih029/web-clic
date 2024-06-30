<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home() {
        return view('home');
    }
}
