<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function create() //boleh make index/show juga tp paling pas create
    {
        //login view
        return view('auth.login');
    }
    public function store(LoginRequest $request)
    {
        //login logic
        // dd($request);
        // dd($request);
        $credentials = $request->validated();
        $credentials = $request->safe()->only(['username', 'password']);
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('user_id', Auth::user()->id);
            $request->session()->put('username', Auth::user()->username);
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'formError' => 'The provided credentials do not match our records.',
        ]);
    }
    public function destroy(Request $request): RedirectResponse
    {
        //logout logic
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function index() //jangan disini bwang mending buat controller baru (NOTE: paling cah iki cuma nyoba2)
    {
        $user = Auth::user();
        // dd($user[0]->profile);
        return view('home', ['user' => $user]);
    }
}
