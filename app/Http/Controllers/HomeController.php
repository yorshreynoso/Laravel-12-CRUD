<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller; // puedo usarlo de esta manera
use Illuminate\View\View;
use App\Models\User; // Import the User model if needed
// use Illuminate\Http\Request;


class HomeController extends Controller
{
      public function index(): View
    {
        $user = User::find(1); // Example of fetching a user, adjust as needed

        //dd($user); // Debugging line to check the user data
        return view('index', ['user' => $user]);
    }
}
