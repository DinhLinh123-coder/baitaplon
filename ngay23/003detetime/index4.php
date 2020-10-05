<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
// in ra thời gian timestamp hiện tại
echo "<br> timestamp : " . time();
// in ra thời gian người đọc được hiện tại
echo "<br> human : " . date("H:i:s d-m-Y");
?>

</body>
</html>
