const express = require('express');
const app = express();
//const fs = require('fs');

// app.get('*', (req, res) => {
app.use((req, res) => {
    res.sendFile(__dirname + (req.url==='/'?'/prueba25.html':req.url));
});

app.listen(8080);