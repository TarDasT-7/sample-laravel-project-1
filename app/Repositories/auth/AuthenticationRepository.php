<?php

namespace App\Repositories\auth;

use App\Models\User;
use App\Repositories\Auth\AuthenticationRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationRepository implements AuthenticationRepositoryInterface
{
    public function register(array $data)
    {
        try {
            $user = User::query()->create([
                "fullname" => $data["fullname"],
                "email" => $data["email"],
                "password" => Hash::make($data["password"]),
            ]);
            Auth::loginUsingId($user->id);
            return response()->json(["message" => "user registerd successfully"], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "something is wrong."], 500);
        }
    }

    public function login(array $data)
    {
        try {
            if (Auth::attempt($data))
                return response()->json(["message" => "user login successfully"], 201);
            else
                return response()->json(["message" => "email or password is not correctly."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "something is wrong."], 500);
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return response()->json(["message" => "user logout successfully"], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "something is wrong."], 500);
        }
    }
}
