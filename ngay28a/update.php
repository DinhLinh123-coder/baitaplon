<?php
define("SITE_PATH", dirname(__FILE__));
define("SITE_URL", "http://localhost/PHP2005/ngay28a/");

require_once SITE_PATH."/"."connect.php";

$name=isset($_POST['name']) ? $_POST['name'] : "";
$intro=isset($_POST['intro']) ? $_POST['intro'] : "";
$image=isset($_POST['image']) ? $_POST['image'] : "";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
if ($id >0) {
    $sql = "UPDATE book SET name = ?, intro=?, image=? WHERE id=?";

    $stmt= $pdo-> prepare($sql);

    $stmt-> execute([$name, $intro, $image, $id]);

    header("location: ".SITE_URL."index.php");
    exit();
}