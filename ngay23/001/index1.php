<?php
$cookieName = "customer_name";
$cookievalue = "nguyễn vinh an";
// tạo ra cookie
setcookie($cookieName, $cookievalue, time() + (86400*5));

// in ra tất cả các cookie
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// truy cập vào 1 cookie
echo "<br>" . $_COOKIE["customer_name"];
?>