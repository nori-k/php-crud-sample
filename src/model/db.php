<?php
// DB接続情報
$dsn = 'mysql:dbname=database;host=127.0.0.1:3306';
$user = 'root';
$password = 'password';

// DB接続
try {
    $dbh = new PDO($dsn, $user, $password);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
