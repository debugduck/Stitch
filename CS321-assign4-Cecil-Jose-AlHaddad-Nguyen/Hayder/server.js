var express = require('express')
var getEvent = require('./getEvent');
var createEvent = require('./createEvent');
const path = require('path')
var app = express()
app.use(express.static(__dirname + '/templates'));


var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : 'password',
  database : 'Test1'
});
var app = express();

connection.connect(function(err){
	app.use(express.static(__dirname + '/templates'));
if(!err) {
    console.log("Database is connected ... nn");    
} else {
    console.log("Error connecting database ... nn");    
}
app.use('/getEvent', getEvent);
//app.use('/createEvent', createEvent);
app.get('/createEvent', createEvent);
   

  app.get('/user', function (req, res) {
	connection.query('SELECT * FROM user_login_info', function (error, results, fields) {
  res.send(JSON.stringify(results)); // 1
});
	connection.query('INSERT INTO events VALUES ?' )
 })

});

app.listen(3000)