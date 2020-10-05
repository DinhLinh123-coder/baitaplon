<?php
define("SITE_PATH", dirname(__FILE__)); //define(): Định nghĩa hằng số
define("SITE_URL", "http://localhost/PHP2005/ngay28a/");
define("SITE_UPLOAD", SITE_PATH."/uploads");
define("FILE_URL", SITE_URL."uploads/");

require_once SITE_PATH."/"."connect.php"; // nhúng file php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>

    <!-- latest compiled and minified CSS-->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<?php
$stmt= $pdo->query('SELECT * FROM book');
$stmt->setFetchMode(PDO::FETCH_OBJ);
$book= $stmt->fetchAll();
echo "<pre>";
print_r($book);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Liệt kê sách</h1>
            <a href="<?php echo SITE_URL."create.php" ?>" class="btn btn-success">Thêm sách</a> <!-- btn btn-success: nút bootstrap-->
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sách</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($book as $bookk): ?>
                    <tr>
                        <td><?php echo $bookk-> id ?></td>
                        <td><?php echo $bookk-> name ?></td>
                        <td>
                            <?php
                            if (strlen($bookk->image)>0){
                                echo "<img style='width:100px' src='".FILE_URL.$bookk->image."' />";
                            }
                            ?>
                        </td>
                        <td>
                    <a href=" <?php echo SITE_URL."edit.php?id=".$bookk->id ?>" class="btn btn-warning">Sửa sách</a>
                    <a href="<?php echo SITE_URL."delete.php?id=".$bookk->id ?>" class="btn btn-danger">Xóa sách</a>
                </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
</body>
</html>
