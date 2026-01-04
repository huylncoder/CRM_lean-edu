<?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    session_start();
    ob_start();

    // kiểm tra quyền truy cập
    define('APP_INIT', true);

    require_once './includes/connect.php';
    require_once './includes/database.php';
    require_once './includes/functions.php';
    require_once './includes/session.php';

    require_once './routes.php';
    
    require_once './config.php';