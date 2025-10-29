<?php
// Controller - Handle login logic
require_once __DIR__ . '/../model/UserModel.php';

class LoginController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // Show login form
    public function showLogin()
    {
        $notification = $_GET['notifikasi'] ?? '';
        require_once __DIR__ . '/../view/login.php';
    }

    // Process login form
    public function processLogin()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validate input
        if (empty($username) || empty($password)) {
            header('Location: index.php?page=login&notifikasi=Username dan password harus diisi');
            exit();
        }

        // Check if user exists
        if (!$this->userModel->userExists($username)) {
            header('Location: index.php?page=login&notifikasi=Username tidak ditemukan');
            exit();
        }

        // Authenticate user
        if ($this->userModel->authenticate($username, $password)) {
            $_SESSION['username'] = $username;
            header('Location: index.php?page=beranda');
            exit();
        } else {
            header('Location: index.php?page=login&notifikasi=Password salah!');
            exit();
        }
    }

    // Logout user
    public function logout()
    {
        session_destroy();
        header('Location: index.php?page=login&notifikasi=Berhasil logout!');
        exit();
    }
}