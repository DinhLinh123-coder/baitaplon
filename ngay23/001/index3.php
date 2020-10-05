<?php

// hủy cookie
$cookieName = "customer_name";
$cookievalue = "nguyễn vinh anh";
// tạo ra cookie
setcookie($cookieName, $cookievalue, time() - (86400*5));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
