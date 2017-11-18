<?php
	$signup_message = '';
	include "connect_db.php";
	connectToMySQLDatabase($dbname='formDB_test1');

	//Retrieve data from form
	$firstname = $_POST["firstname"];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_encrypted = md5($_POST['password']);

	// Create table if it does not exist
	$table_name = 'members';
	$query = "CREATE TABLE IF NOT EXISTS $table_name (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				email VARCHAR(50),
				password VARCHAR(32),
				reg_date TIMESTAMP
				)";
	if (!mysqli_query($conn, $query)) {
		die("Error creating table: " . mysqli_error($conn));
	}

	//Insert data into table if it doe not already exist
	$query = "SELECT * from $table_name where email ='$email'";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0)
	{
		$signup_message = "There is already an acocunt associated with this e-mail address: $email";
	} else {
		$query = "INSERT INTO $table_name (firstname,lastname,email,password) 
					VALUES ('$firstname', '$lastname','$email','$password')";
		$result = mysqli_query($conn, $query);
		if(!$result) {
			$signup_message = "Error inserting user info into database: ".mysqli_error($conn);
		} else {
			$signup_message = "Sign up successfull!";
		}
	}
	mysqli_close($conn);
?>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body> <div class="form">
	<div class="tab-content">
		<h1><?php echo $signup_message; ?> </h1>
		<br/>
		<button class='button button-block'  onclick="location.href='index.php';">
			Back to main page </button>
	</div>
</div></body>
</html>