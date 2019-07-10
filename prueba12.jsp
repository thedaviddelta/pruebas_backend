<%! int day = 3; %> 
<html> 
<head>
    <title>Document</title>
</head>
<body>
    <% if (day == 1 || day == 7) { %>
        <p>Today is weekend</p>
    <% } else { %>
        <p>Today is not weekend</p>
    <% } %>

    <%
        if (day == 1 || day == 7) {
            out.println("<p>Today is weekend</p>");
        } else {
            out.println("<p>Today is not weekend</p>");
        }
    %>
</body>
</html>