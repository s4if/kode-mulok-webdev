<?php
// sebagai controller
$page = $_GET["page"];

$routes = [];
$routes["login"] = "login.php";
$routes["beranda"] = "beranda.php";
$routes["home"] = "beranda.php";
$routes["profil"] = "profil.php";

if (!isset($routes[$page])) {
    echo "Halaman Tidak Ditemukan";
    exit();
}

include $routes[$page];
