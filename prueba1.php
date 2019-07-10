<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        echo "HTTP_USER_AGENT -> ".$_SERVER['HTTP_USER_AGENT']."<br>";
        echo "PHP_SELF -> ".$_SERVER['PHP_SELF']."<br>";
        echo "SERVER_ADDR -> ".$_SERVER['SERVER_ADDR']."<br>";
        echo "SERVER_NAME -> ".$_SERVER['SERVER_NAME']."<br>";
        echo "HTTP_HOST -> ".$_SERVER['HTTP_HOST']."<br>";
        echo "REMOTE_ADDR -> ".$_SERVER['REMOTE_ADDR']."<br>";
        echo "REMOTE_HOST -> ".$_SERVER['REMOTE_HOST']."<br>";
        echo "REMOTE_PORT -> ".$_SERVER['REMOTE_PORT']."<br>";
        echo "SCRIPT_FILENAME -> ".$_SERVER['SCRIPT_FILENAME']."<br>";
        echo "SERVER_PORT -> ".$_SERVER['SERVER_PORT']."<br>";
        echo "SCRIPT_NAME -> ".$_SERVER['SCRIPT_NAME']."<br>";
        echo "SCRIPT_URI -> ".$_SERVER['SCRIPT_URI']."<br>";
    ?>
</body>
</html>