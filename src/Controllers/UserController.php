<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $this->view('user/index');
    }

    public function create()
    {
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        
    }
}
