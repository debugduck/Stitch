<?php 
	include "connect_db.php";
	session_start();
	$login_error = ''; 
		
	if(isset($_POST['submit_login'])) {
		$email = $_POST['email_login'];
		$password = $_POST['password_login'];
		// $password_encrypted = md5($_POST['password_login']);

		// if(isset($save_password)) {
		// 	setcookie($email,$_POST['password_login'],time()+3600);
		// 	if(!isset($_COOKIE[strtr($email, '.', '_')])) {
		// 		echo "<script type='text/javascript'>alert('Cookies are not enabled!')";
		// 	}
		// }
		
		connectToMySQLDatabase($dbname='stich_db1');	
		$username = substr($email,0,strrpos($email,"@"));
		$query = "SELECT * from user_login_info where username='$username'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 1) {
			$row=mysqli_fetch_array($result);
			// var_dump($row['password']);
			if($password == $row['password']) {
				//Login succesful! time to set session :)
				$_SESSION['login_user'] = $row['username']; //initializing session
				header("location: event_page.php"); // Redirecting to profile page
			} else {
				$login_error = 'Incorrect password!';
			}
		} else {
			$login_error = "Invalid e-mail address!";
		}
		mysqli_close($conn);
	}
?>