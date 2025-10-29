<?php

class Login
{
    public function index()
    {
        require_once __DIR__ . "/../view/login.php";
    }

    public function doLogin()
    {
        session_start();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $users = [
            "admin" => "password123",
            "user" => "bismillah",
        ];
        $users["player"] = "1234";
        // username sebagai key, dan passwod sebagai value
        if (array_key_exists($username, $users)) {
            if ($password == $users[$username]) {
                // arahkan ke beranda
                $_SESSION["username"] = $username;
                header("Location: index.php?page=beranda");
                exit();
            } else {
                // mengarahkan kembali ke halaman login dengan pesan error
                header(
                    "Location: index.php?page=login&notifikasi=Password Salah!",
                );
                exit();
            }
        } else {
            header(
                "Location: index.php?page=login&notifikasi=Username tidak ditemukan",
            );
            exit();
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: index.php?page=login&notifikasi=Berhasil Logout!");
        exit();
    }
}
