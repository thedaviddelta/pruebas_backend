const http = require('http');

http.createServer((req, res) => {
    res.setHeader('Content-Type', 'text/html');
    res.end(`
        <!DOCTYPE html>
        <html lang='es'>
            <head>
                <title>Prueba21</title>
            </head>
            <body>
                <div>
                    <p>Hola Mundo</p>
                </div>
            </body>
        </html>
    `);
}).listen(8080);