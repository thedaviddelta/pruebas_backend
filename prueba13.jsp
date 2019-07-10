<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <p>Nombre: <input type="text" name="name"></p>
        <p>Edad: <input type="text" name="age"></p>
        <p><input type="submit"></p>
    </form>
    <%
        if (request.getParameter("name") != null)
            out.print("<p>Hola " + request.getParameter("name") + " de " + request.getParameter("age") + " años!</p>");
    %>
</body>
</html>