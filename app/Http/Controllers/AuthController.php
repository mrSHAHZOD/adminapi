<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request): Response
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

     if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['The provided credentials are incorrect.']);
        }

        return response([
            'token' =>$user->createToken($user->name)->plainTextToken
        ]) ;
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

        $token = $user->createToken($user->name)->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token,
        ]);
    }

    public  function logout(Request $request): Response
    {
        $request->user()->currentAccessToken()->delete();

        return  response([
            'loved out'
        ]);

    }
}

