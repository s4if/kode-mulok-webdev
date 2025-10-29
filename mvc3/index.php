<?php
// Front Controller - Entry point for all requests
session_start();

// Get requested page from URL
$page = $_GET['page'] ?? 'login';

// Simple routing system
$routes = [
    'login' => ['controller' => 'LoginController', 'method' => 'showLogin'],
    'do_login' => ['controller' => 'LoginController', 'method' => 'processLogin'],
    'beranda' => ['controller' => 'BerandaController', 'method' => 'showBeranda'],
    'logout' => ['controller' => 'LoginController', 'method' => 'logout']
];

// Check if route exists
if (!isset($routes[$page])) {
    die('Halaman tidak ditemukan');
}

$route = $routes[$page];
$controllerFile = __DIR__ . '/controller/' . $route['controller'] . '.php';

// Load and execute controller
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $route['controller']();
    $controller->{$route['method']}();
} else {
    die('Controller tidak ditemukan');
}