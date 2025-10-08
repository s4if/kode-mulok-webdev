<?php
// logic disini
echo "logic disini<br>";
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
