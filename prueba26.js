const express = require('express');
const app = express();

app.use(express.static('.', {index: 'prueba25.html'}));

app.listen(8080);