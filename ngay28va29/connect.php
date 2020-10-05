<?php
$host = 'localhost';
// tên CSDL
$db   = 'ngay28';

$user = 'root';

$pass = '';

$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // kết nối đến CSDL thì được gán cho biến $pdo
    $pdo = new PDO($dsn, $user, $pass, $options);

}catch(PDOException $e) {
    echo "<br> Kết nối đến CSDL thất bại";
    die;
}
