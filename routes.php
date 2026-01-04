<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

switch($uri) {
    case'':
    case 'dashboard':
        require __DIR__ . './modules/dashboard/index.php';
        break;
    case 'login': 
        require __DIR__ . './modules/auth/login.php';
        break;
    case 'register':
        require __DIR__ . './modules/auth/register.php';
        break;
    case 'users':
        require __DIR__ . './modules/users/index.php';
        break;
    default:
        require __DIR__ . './modules/errors/404.php';
        break;
}