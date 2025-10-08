<?php
// logic disini
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
        header("Location: beranda.php");
        exit();
    } else {
        // mengarahkan kembali ke halaman login dengan pesan error
        header("Location: login.php?notifikasi=Password Salah!");
        exit();
    }
} else {
    header("Location: login.php?notifikasi=Username tidak ditemukan");
    exit();
}
// Kode ada disini: https://github.com/s4if/kode-mulok-webdev
