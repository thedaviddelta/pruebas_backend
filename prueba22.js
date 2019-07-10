const http = require('http');
const fs = require('fs');

http.createServer((req, res) => {
    let url = req.url==='/'?'prueba22.html':req.url.substr(1);

    fs.readFile(url, (err, data) => {
        if (err) {
            res.statusCode = 404;
            res.end();
            return;
        }
        res.setHeader('Content-Type', 'text/html');
        res.end(data.toString());
    });
}).listen(8080);