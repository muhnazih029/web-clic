<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function create() //boleh make index/show juga tp paling pas create
    {
        return view('auth.register');
    }
    public function store(RegisterRequest $request)
    {
        User::create([
            'username' => $request->username,
            'nim' => $request->nim,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
