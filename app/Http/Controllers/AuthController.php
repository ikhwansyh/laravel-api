<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {

     Log::info($request->all());

       try {
            $validated = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
        } catch (ValidationException $e) {
            return Log::info($e->getMessage());
        }

        $user = User::where('email', $validated['email'])->first();

        Log::info($user);

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages(['message' => 'Email atau Password Salah']);
        }

        Log::info('Checkpoint 1');

        $token = $user->createToken('auth_token')->plainTextToken;

        Log::info('Checkpoint 2');

        return response()->json([
            'data' => $user,
            'message' => 'Login Berhasil',
            'token' => $token
        ]);
    }

    public function logout(Request $request) {}
}
