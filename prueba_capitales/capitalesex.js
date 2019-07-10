const express = require('express');
const app = express();
const fs = require('fs');

app.use(express.urlencoded({extended: 'false'}));

app.use((req, res, next) => {
    res.header({
        'Access-Control-Allow-Origin': '*',
        'Access-Control-Allow-Methods': 'POST,GET,OPTIONS',
        'Access-Control-Allow-Headers': 'Origin, X-Requested-With, Content-Type, Accept',
        'Content-Type': 'application/json'
    });

    if (req.method !== 'POST')
        return res.send([]);
    next();
});

app.post('*', (req, res) => {
    fs.readFile("capitales.txt", (err, caps) => {
        if (err)
            return console.log(err.message);

        let result = caps.toString()
        .split("\r\n")
        .filter(cap => cap.startsWith(
            req.body.sort
        ));

        res.send(result);
    });
});

app.listen(8080);