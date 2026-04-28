<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show all users
    public function index()
    {
        return response()->json([
            "message" => "All Users"
        ]);
    }

    // Show single user
    public function show($id)
    {
        return response()->json([
            "message" => "Single User",
            "user_id" => $id
        ]);
    }

    // Store new user
    public function store(Request $request) 
    {
        $name = $request->input('name');

        // Example response
        return response()->json([
            "message" => "User created successfully",
            "name" => $name
        ]);
    }

    // Logout user
    public function logout(Request $request)
    {
        $request->session()->forget("username");

        return redirect("/profile");
    }

    // Delete session / user logout
    public function delete(Request $request)
    {
        $request->session()->forget("username");

        return redirect("/logout");
    }
}