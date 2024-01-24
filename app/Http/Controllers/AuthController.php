<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request): Response
    {
        $attemp = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($attemp) {
            $user = Auth::user();  

            return response()->json([
                'success' => true,
                'message' => 'User Login successfully',
                'token' => $user->createToken('LaravelSanctumAuth')->plainTextToken,
                'token_type' => 'Bearer',
                'user' => $user
            ]);
        }
        else {
            return  response()->json('Unauthorised.', ['error' => 'Unauthorised', 'request' => $attemp]);
        }
    }



    public function register(Request $request): Response
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create([
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


    public function logout(Request $request): Response
{
    $request->user()->currentAccessToken()->delete();

    return response(['message' => 'Logged out successfully']);
}

}

