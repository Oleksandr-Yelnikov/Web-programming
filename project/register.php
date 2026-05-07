<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'] ?? '';
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$username || !$login || !$password) {
        die("Заповніть всі поля");
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, login, password) VALUES (?, ?, ?)");
    
    if ($stmt->execute([$username, $login, $hash])) {
        echo "Реєстрація успішна";
    } else {
        echo "Помилка запису";
    }
}