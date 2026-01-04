<?php
// bảo vệ chặn truy cập trực tiếp
if (!defined('APP_INIT')) {
    http_response_code(403);
    exit('Forbidden access');
}