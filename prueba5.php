<?php
if (!isset($_COOKIE['tdd_name']) || !isset($_COOKIE['tdd_age'])) {
    setcookie("tdd_name", $_POST["name"]);
    setcookie("tdd_age", $_POST["age"]);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>Hola ".$_COOKIE['tdd_name']." de ".$_COOKIE['tdd_age']." años!</p>";
    ?>
</body>
</html>