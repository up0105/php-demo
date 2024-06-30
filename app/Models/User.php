<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function users(): array
    {
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function user($id)
    {
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    function login(string $email, string $password): bool
    {
        $user = $this->findUserByEmail($email);

        // if user found, check the password
        if ($user && password_verify($password, $user['password'])) {

            // prevent session fixation attack
            session_regenerate_id();

            // set username in the session
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_id']  = $user['id'];

            return true;
        }

        return false;
    }

    public function findUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }
}
