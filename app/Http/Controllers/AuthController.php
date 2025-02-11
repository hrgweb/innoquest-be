<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'invalid credentials', 'success' => false], 401);
        }


        $token = $user->createToken($request->email)->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'logout success'], 200);
    }

    public function register(Request $request)
    {
        $body = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($body);

        $token = $user->createToken($user->name)->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }
}
