<?php
	include('session.php');
	#$pass = $_COOKIE[$email."@gmu.edu"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Your Home Page</title>
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
		<link rel="stylesheet" href="css/style2.css">
	</head>
	<body> <div class="form">
		<div id="profile">
			<h1><b id="welcome">Welcome : <i><?php echo "$firstname $lastname"; ?>!</i></b></h1>
			<br>
			<form class="field-wrap">
				<input id="pic_file" type="file"  accept="image/*"/>
				<input id="upload" type="submit" value="Upload"/>
			</form>
			<div style="clear:both;"></div>
			<div class="field-wrap"><label>Email: <?php echo "$email"?></label></div>
			<button id="logout" class='button'  onclick="location.href='logout.php';">
			Log out </button>
		</div>
	</div></body>
</html>