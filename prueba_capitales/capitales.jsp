<%@ page import="java.util.List" %>
<%@ page import="java.nio.file.*" %>
<%@ page import="java.nio.charset.*" %>

<%
response.setContentType("application/json");
response.addHeader("Access-Control-Allow-Origin", "*");
response.addHeader("Access-Control-Allow-Methods", "POST,GET,OPTIONS");
response.addHeader("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");

if (request.getParameter("sort") == null)
    return;

List<String> caps = Files.readAllLines(Paths.get("../webapps/ROOT/capitales.txt"), StandardCharsets.ISO_8859_1);

String res = "[";
boolean first = true;
for (String cap : caps) {
    if (cap.startsWith(request.getParameter("sort"))) {
        if (first) {
            first = false;
        } else {
            res += ",";
        }
        res += "\"" + cap + "\"";
    }
}
res += "]";

out.print(res);
%>