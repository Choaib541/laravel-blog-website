<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function authenticate(Request $request)
    {

        $validated = $request->validate([

            "email" => ["required", "email", "exists:users,email"],
            "password" => ["required", "min:8"],

        ]);

        if (Auth::attempt($validated)) {
            return redirect(route("Home"))->with("success", "Logged in successfully");
        };

        return back()->withErrors(["password" => "Password is not Correct"]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([

            "name" => ["required", "min:3"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", "min:8", "confirmed"],
            "terms" => ["required"],
            "picture" => ["required"],

        ]);

        $validated["picture"] = $request->file("picture")->store("users_pictures", "public");
        $validated["password"] = bcrypt($validated["password"]);

        unset($validated["terms"]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect(route("Home"))->with("success", "Your Account has been created successfully");
    }

    public function profile()
    {
        return view("auth.profile");
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("Home"))->with("success", "Logged out successfully");
    }
}
