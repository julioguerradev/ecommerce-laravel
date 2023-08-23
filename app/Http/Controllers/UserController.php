<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', ['users' => $users]);
    }

    public function show(User $user)
    {
        // return $user;
        return view('user', [
            'name' => 'Júlio Guerra',
            'user' => $user
        ]);
    }
}
