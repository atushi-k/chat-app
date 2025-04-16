<?php
$host = 'mysql';
$db = 'testdb';
$user = 'testuser';
$pass = 'testpass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    echo "DB接続成功!";
    
} catch (PDOException $e) {
    echo "DB接続失敗: " . $e->getMessage();
}