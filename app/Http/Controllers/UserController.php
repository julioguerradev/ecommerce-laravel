<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        // return $user;
        return view('users', [
            'name' => 'Júlio Guerra',
            'user' => $user
        ]);
    }
}
