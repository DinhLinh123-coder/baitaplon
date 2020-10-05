<?php

// in ra tất cả các cookie
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// truy cập vào 1 cookie
echo "<br>" . $_COOKIE["customer_name"];

// chỉnh sửa lại cookie buộc phải set lại cookie

$cookieName = "customer_name";
$cookievalue = "nguyễn vinh anh";
// tạo ra cookie
setcookie($cookieName, $cookievalue, time() + (86400*5));