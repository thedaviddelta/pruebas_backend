<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <p>Nombre: <input type="text" name="name"></p>
        <p>Edad: <input type="text" name="age"></p>
        <p><input type="submit"></p>
    </form>
    <?php
        /*
        echo "<p>";
        print_r($_POST);
        echo "</p>";
        */
        echo "<p>".print_r($_POST, true)."</p>";
        echo "<ul>";
        foreach ($_POST as $key => $value) {
            echo "<li>".$key." => ".$value."</li>";
        }
        echo "</ul>";
        echo "<br>-----<br>";
        echo "<p>";
        echo "<br>file: ";
        echo file("php://input");
        echo "<br>file print_r: ";
        echo print_r(file("php://input"), true);
        echo "<br> file foreach: ";
        echo "<ul>";
        foreach (file("php://input") as $key => $value) {
            echo "<li>".$key." => ".$value."</li>";
        }
        echo "</ul>";
        echo "<br>file_get_contents: ";
        echo file_get_contents("php://input");

        echo "<br><br>file_get_contents img: ";
        echo file_get_contents("/hamburgueseria/mesa.png");
        echo "</p>";
    ?>
</body>
</html>