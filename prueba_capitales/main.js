const http = require('http');

http.request("http://thedaviddelta.tk/pruebas_backend/capitales.php", {
    "method": "POST",
    "headers": {
        "Content-Type": "application/x-www-form-urlencoded"
    }
}, (res) => {
    res.on("data", (data) => JSON.parse(data).forEach(e => console.log(e)))
    .setEncoding("utf-8");
})
.on("error", console.error)
.end("sort=" + process.argv[2]);