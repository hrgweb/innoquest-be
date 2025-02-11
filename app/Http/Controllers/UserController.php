<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        try {
            $user = User::create($validated);
            if (!$user) {
                throw new Exception('User not created');
            }
            return response()->json(['message' => 'User created successfully.', 'success' => true], 201);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        try {
            $user->update($validated);
            return response()->json(['message' => 'User updated successfully.', 'success' => true], 201);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response()->json(['message' => 'User removed successfully.', 'success' => true], 200);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
