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

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["email"] . "<br>";
            }
        } else {
            echo "0 results";
        }
    }
}