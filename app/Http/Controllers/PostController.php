<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class PostController extends Controller
{
    public function index() :View
    {
        $users = User::all(); // Fetch all users, adjust as needed
        // Logic to retrieve and display posts
        return view('posts.index', ['users' => $users]); // Assuming you have a view for displaying posts
    }
}
