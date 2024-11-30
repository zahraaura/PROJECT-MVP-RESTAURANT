<?php
require_once 'app/models/User.php';

class UserController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (User::checkLogin($username, $password)) {
                header('Location: index.php?controller=menu&action=index');
            } else {
                $error = "Invalid credentials";
                require 'app/views/users/login.php';
            }
        } else {
            require 'app/views/users/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            User::registerUser($username, $password, $email);
            header('Location: index.php?controller=user&action=login');
        }
        require 'app/views/users/register.php';
    }
}
?>