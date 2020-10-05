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
// chuyển timestamp thành human time
$time1 = mktime(1,1,1,12,5,2017);
$human1 = date("H:i:s Y-m-d", $time1);
// chuyển human time thành timestamp
$d = strtotime($human1);
echo "<br> human1 : " . $human1;
echo "<br> d : " . $d;
echo "<br> line3 : " . date("H:i:s Y-m-d", $d);

// chuyển timestamp => human dùng date()
// chuyển human => timestam dùng strtotime()
// chú ý quan trọng : cần kiểm tra lại quá trình chuyển
// từ human => timestamp khi dùng  strtotime()
// chỉ đúng 1 vài định dạng format
// H:i:s Y-m-d
// thử H:i:s d/m/Y
?>
</body>
</html>
