<?php
// sebagai controller
$page = $_GET["page"];

$routes = [
    "login" => "Login:index",
    "do_login" => "Login:doLogin",
    "beranda" => "Beranda:index",
    "logout" => "Login:logout",
];

$function = explode(":", $routes[$page])[1];
$className = explode(":", $routes[$page])[0];

if (array_key_exists($page, $routes)) {
    require_once __DIR__ . "/controller/" . $className . ".php";
} else {
    echo "Halaman Tidak Ditemukan";
    exit();
}

$controller = new $className();
$controller->$function();
