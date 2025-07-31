<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{
    public function index(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:3', // Ensure password confirmation
        ]);

        // Create the user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // Redirect or return a response
        return redirect()->route('posts.index')->with('success', 'User created successfully!');
    }

    public function create()
    {
        // Return the view for creating a new user
        return view('users.create');
    }
}
