<?php
session_start();

// якщо користувач не залогінений — назад на логін
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h2>Вітаю, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>

<a href="logout.php">Вийти</a>

</body>
</html>