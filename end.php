<?php
if (isset($_GET['name'])) {
    $name = ($_GET['name']);
    echo "<h2>Hello " . $name . "</h2>";
}
?>
