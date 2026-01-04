<?php 
// Middleware kiểm tra đăng nhập
function requireLogin() {
    if(empty($_SESSION['users'])) {
        header('Location: /login');
        exit;
    }
}

function requireGuest() {
    if(!empty($_SERVER['users'])) {
        header('Location: /dashboard');
        exit;
    } 
}