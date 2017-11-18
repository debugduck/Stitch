<?php
	session_start();
	$username = $_SESSION['login_user'];
	include('connect_db.php');
	connectToMySQLDatabase($dbname='stich_db1');
	$query = "SELECT * from user_login_info where username='$username'";
	$result = mysqli_query($conn, $query);
	$row=mysqli_fetch_array($result);
	#$firstname = $row['firstname'];
	#$lastname = $row['lastname'];
	$id = $row['id'];
	$password = $row['password'];
?>