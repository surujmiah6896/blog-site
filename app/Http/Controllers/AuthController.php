<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try{
            // Validate input
            $data = $request->validate([
                'name' => 'required|string|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            // Create user with hashed password
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'created_at' => now(),
            ]);

            return sendResponseWithData('user', $user, true, 'Create Successfully', 201);
        }catch(\Throwable $th){
            return sendResponseWithMessage(false, $th->getMessage(), 500);
        }

    }
}
