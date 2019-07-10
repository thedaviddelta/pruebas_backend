const express = require('express');
const app = express();

app.get('/', (req, res) => {
    res.send(`
        <!DOCTYPE html>
        <html lang='es'>
            <head>
                <title>Prueba24</title>
            </head>
            <body>
                <div>
                    <p>Hola Mundo</p>
                </div>
            </body>
        </html>
    `);
});

app.listen(8080);