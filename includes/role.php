<?php

//Middleware kiểm tra role
function requireRole(array $roles) {
    if(empty($_SESSION['users']) || !in_array($_SESSION['users']['role'], $roles)) {
        http_response_code(403);
        exit("Bạn không có quyền truy cập");
    }
}