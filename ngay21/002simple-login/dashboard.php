<?php session_start() ;
if (!isset($_SESSION["user"])) {
    // chuyển hướng login.php
    // "Location: URL"
    header("Location: login.php");
    exit();
}
?>
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


    <div>
        <h1>Đăng nhập thành công, chào <?php echo $_SESSION["user"] ?></h1>
    <?= $_COOKIE['linhlinh'] ?>
        <a href="logout.php">Đăng xuất !</a>
<!--        -->

    </div>

</body>
</html>
