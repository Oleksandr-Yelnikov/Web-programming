<?php
session_start();
require 'db.php';

$login = $_POST['login'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE login = ?");
$stmt->execute([$login]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['username'];
    header("Location: dashboard.php");
} else {
    echo "Помилка";
}