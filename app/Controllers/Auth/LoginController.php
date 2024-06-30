<?php

namespace App\Controllers\Auth;

use App\Models\User;

class LoginController
{
    public function showLoginForm()
    {
        return view('auth/login');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // validate login
            $user = new User();

            if ($user->login($email, $password)) {

                // die('Login successful');

                redirect_with_data('/dashboard', ['success' => 'Login successful']);
            } else {
                redirect_with_data('/login', ['error' => 'Invalid email or password']);
            }
        } else {
            header('Location: /login');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect_to('/login');
    }
}
