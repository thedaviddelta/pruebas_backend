<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    <p>
        Hola! 
        <%
            out.println("Tu IP es ".concat(request.getRemoteAddr()));
        %>
    </p>
</body>
</html>