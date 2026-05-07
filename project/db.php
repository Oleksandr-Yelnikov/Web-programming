<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$db   = 'test_db';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO(
        "mysql:host=$host;port=8889;dbname=$db;charset=utf8",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("DB error: " . $e->getMessage());
}