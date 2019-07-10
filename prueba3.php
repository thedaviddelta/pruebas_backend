<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        // echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <p>Nombre: <input type="text" name="name"></p>
        <p>Edad: <input type="text" name="age"></p>
        <p><input type="submit"></p>
    </form>
    <?php
        if ($_POST['name'] != "")
            echo "<p>Hola ".$_POST['name']." de ".$_POST['age']." años!</p>";
    ?>
</body>
</html>