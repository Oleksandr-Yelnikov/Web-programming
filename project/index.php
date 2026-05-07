<?php session_start(); ?>
<h2>Реєстрація</h2>
<form action="register.php" method="POST">
    <input name="username" placeholder="Username"><br>
    <input name="login" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button>Зареєструватись</button>
</form>

<h2>Логін</h2>
<form action="login.php" method="POST">
    <input name="login" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button>Увійти</button>
</form>