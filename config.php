<?php
// database
const _HOST = 'localhost';
const _DB = 'manager_edu';
const _NAME = 'root';
const _PASSWORD = 'mysql2025';
const _DRIVER = 'mysql'; 

// debug errors
const _DEBUG = true;

// Thiết lập host;
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST']);
define('BASE_URL_TEMPLATES', BASE_URL . '/templates');

// Thiết lập path
define('_PATH_URL', __DIR__);
define('_PATH_URL_TEMPLATES', _PATH_URL . '/templates');