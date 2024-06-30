<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function create() //boleh make index/show juga tp paling pas create
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'nim' => $request->nim,
            'password' => Hash::make($request->password),
            'role' => 1, //guest
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
