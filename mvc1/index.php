<?php
// sebagai controller
$page = $_GET["page"];

$routes = [];
$routes["login"] = "login.php";
$routes["beranda"] = "beranda.php";
$routes["home"] = "beranda.php";
$routes["profil"] = "profil.php";
$routes["do_login"] = "do_login.php";
$routes["logout"] = ""; // local

// halaman yg dilindungi login
$protected = ["beranda", "profil", "home"];
if (!isset($routes[$page])) {
    echo "Halaman Tidak Ditemukan";
    exit();
}

// logic disini
session_start();
if (in_array($page, $protected)) {
    if (!isset($_SESSION["username"])) {
        header(
            "Location: index.php?page=login&notifikasi=Maaf, anda harus login dulu",
        );
        exit();
    }
}

// logout
if ($page == "logout") {
    session_destroy();
    header("Location: index.php?page=login&notifikasi=Berhasil Logout!");
    exit();
}

include $routes[$page];
