<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $user = new User();
        $users = $user->users();
        return view('users/index', compact('users'));
    }

    public function user($id)
    {
        $user = new User();
        $user->user($id);
    }
}