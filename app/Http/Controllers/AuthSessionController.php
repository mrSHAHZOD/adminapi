<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthSessionController extends Controller
{
    public function login(Request $request): Response
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response(['success']);
        }

        return response([
            'The provided credentials do not match our records.',

        ]);

    }
    public function register(Request $request):Response
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::created([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return response([
            'user' => $user,
        ]);
    }


    public  function  logout(Request $request): Response
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response(['loged out']);
    }
}
