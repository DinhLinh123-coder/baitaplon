<?php
define("SITE_PATH", dirname(__FILE__));
define("SITE_URL", "http://localhost/php2005/ngay28a/");

require_once SITE_PATH."/"."connect.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- latest compiled and minified CSS-->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<?php
$id= isset($_GET["id"]) ? (int)$_GET["id"] : 0;
$stmt = $pdo->prepare('SELECT * FROM book WHERE id= ?');
$stmt->execute([$id]);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$bookk=$stmt->fetch();

?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Sửa sách</h1>
        </div>
        <div class="col-sm-12">
            <form name="edit" method="post" action="<?php echo SITE_URL."update.php?id=".$id ?>">
                <div class="form-group">
                    <label>Tên sách:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $bookk->name ?>">
                </div>
                <div class="form-group">
                    <label>Mô tả sách:</label>
                    <input type="text" class="form-control" name="intro" value="<?php echo $bookk->intro ?>">
                </div>
                <div class="form-group">
                    <label>Ảnh sách:</label>
                    <input type="text" class="form-control" name="image" value="<?php echo $bookk->image ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
