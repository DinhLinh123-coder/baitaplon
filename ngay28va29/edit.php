<?php
session_start();
// __FILE__ trả ra đường dẫn hiện tại trên ổ đĩa
// vd : C:\xampp\htdocs\PHP2005\ngay28\index.php
// dirname(__FILE__) trả về đường dẫn của thư mục chưa file hiện tại
define("SITE_PATH", dirname(__FILE__));
define("SITE_UPLOAD", SITE_PATH."/uploads");
define("SITE_URL", "http://localhost/PHP2005/ngay28va29/");
define("FILE_URL", SITE_URL."uploads/");


require_once SITE_PATH."/"."connect.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php
$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
$stmt = $pdo->prepare('SELECT * FROM books WHERE id = ?');
$stmt->execute([$id]);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$book = $stmt->fetch();


?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Sửa sách</h1>
        </div>
        <div class="col-sm-12">
            <form name="edit" method="post" action="<?php echo SITE_URL."update.php?id=".$id ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên sách:</label>
                    <input type="text" class="form-control" name="book_name" value="<?php echo $book->book_name ?>">
                </div>
                <div class="form-group">
                    <label>Mô tả sách:</label>
                    <input type="text" class="form-control" name="book_intro" value="<?php echo $book->book_intro ?>">
                </div>
                <div class="form-group">
                    <label>Ảnh sách:</label>
                    <input type="file" name="book_image_file">
                    <?php
                    if (strlen($book->book_image) > 0) {
                        echo "<img style='width:100px' src='".FILE_URL.$book->book_image."' />";
                    }

                    ?>
                    <input type="hidden" name="book_image" value="<?php echo $book->book_image ?>" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>