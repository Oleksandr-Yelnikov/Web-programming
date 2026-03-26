<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Мій PHP Калькулятор</title>
    <style>
        /* Це CSS - робимо красиво як у Opera GX */
        body { background: #121212; color: white; font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; }
        .container { background: #1e1e1e; padding: 20px; border-radius: 10px; border: 1px solid #ff0033; width: 300px; }
        input, select, button { width: 100%; margin: 10px 0; padding: 10px; border-radius: 5px; border: none; }
        button { background: #ff0033; color: white; font-weight: bold; cursor: pointer; }
        .result { background: #000; padding: 10px; border: 1px solid #444; color: #00ff00; text-align: center; font-size: 20px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Calculator v1.0</h2>

    <div class="result">
        <?php
        if (isset($_POST['submit'])) {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $op = $_POST['operation'];
            $res = "";

            switch ($op) {
                case "add": $res = $n1 + $n2; break;
                case "sub": $res = $n1 - $n2; break;
                case "mul": $res = $n1 * $n2; break;
                case "div": 
                    $res = ($n2 != 0) ? $n1 / $n2 : "На 0 не ділимо!"; 
                    break;
                default: $res = "Помилка";
            }
            echo "Результат: " . $res;
        } else {
            echo "Введіть числа";
        }
        ?>
    </div>

    <form method="post">
        <input type="number" name="num1" placeholder="Число 1" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num2" placeholder="Число 2" required>
        <button type="submit" name="submit">Порахувати</button>
    </form>
</div>

</body>
</html>