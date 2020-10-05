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
    <pre>
        có 2 kiểu thời gian
        1 - kiểu cho người đọc : 12:05:05 23/12/2015
        không tính toán được
        2 - 32432843284932 ( timestamp)
        không biết được ngày tháng năm nào nhưng mà được dùng đê tính toán
        số giây tính 1-1-1970
    </pre>

    <?php
    // dùng hàm date()
    echo "<br>" . date("d/m/Y H:i:s");
    ?>

</body>
</html>
