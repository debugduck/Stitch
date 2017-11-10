var express = require('express')
var app = express()
app.use(express.static(__dirname + '/templates'));



app.get('/', function (req, res) {
 res.sendFile(path.join(__dirname + 'index.html'));
})

app.listen(3000)