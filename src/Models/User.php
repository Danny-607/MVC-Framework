<?php 

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    public function create($username, $email, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

        $stmt->bindParam(':name', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));

        return $stmt->execute();
    }
}