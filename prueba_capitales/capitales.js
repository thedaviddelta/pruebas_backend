const http = require('http');
const fs = require('fs');
const { parse } = require('querystring');

http.createServer((req, res) => {
    res.setHeader("Access-Control-Allow-Origin", "*");
    res.setHeader("Access-Control-Allow-Methods", "POST,GET,OPTIONS");
    res.setHeader("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    res.setHeader("Content-Type", "application/json");

    req.on("data", data => {
        fs.readFile("capitales.txt", (err, caps) => {
            if (err != null) {
                console.log(err.message);
                return;
            }

            let result = caps.toString()
            .split("\r\n")
            .filter(cap => cap.startsWith(
                parse(data.toString()).sort
            ));

            res.end(JSON.stringify(result));
        });
    });
})
.listen(8000);