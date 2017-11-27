var express = require('express')
const path = require('path')
var mysql      = require('mysql');
var tester = require('./event.json')
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : 'password',
  database : 'Test1'
});
module.exports = (function() {
console.log(tester.id)

    var api = express.Router();

// connection.query('SELECT * FROM events', function (error, results, fields) {
// 	console.log(results);
// 	console.log('hello')
//   console.log(JSON.stringify(results)); // 1
// });
 connection.query('INSERT INTO events VALUES ? ',tester, function (error, results, fields) {
 	if(error)
 	{
 		console.log(error)
 	}
 	console.log(results)
});

  api.get('/createEvent', function (req, res) {
 
 res.sendFile(path.join(__dirname + '/templates/create_event.html'));

})
    
   return api;
})();
