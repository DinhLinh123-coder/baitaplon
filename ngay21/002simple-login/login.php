<?php session_start();
$_SESSION['linh'] = 'Dinh Linh';

// đăng nhập rồi
if (isset($_SESSION["user"])) {
    // chuyển hướng
    header("Location: dashboard.php");
    exit;
}

$errors = [];

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["username"]) && isset($_POST["password"]) && ($_POST["username"]) && ($_POST["password"])) {
        // coi username : admin
        // coi password : 919
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);



        if ($username == "admin" && $password == "919") {
            // đăng nhập thành công

            // gán sesssion user thành công
            $_SESSION["user"] = "admin";
            setcookie('linhlinh','admin');
            // chuyển hướng dashboard.php
            header("Location: dashboard.php");
            exit;
        } else {
            $errors[] = "Sai username hoặc sai password";
        }
    } else {
        $errors[] = "Chưa nhập đủ username hay password";
    }
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

    <?php
    if (isset($errors) && !empty($errors)) {
        // chuyển mảng thành chuỗi
        ?>
        <div style="color:red"> <?php echo implode("<br>", $errors) ?></div>
        <?php
    }
    ?>

    <form name="login" method="post" action="">

        <div>
            <label>Username</label>
            <input type="text" name="username" value="" autocomplete="off">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" value="" autocomplete="off">
        </div>

        <div>
            <input type="submit" name="login" value="Đăng nhập">
        </div>
    </form>
</body>
</html>
