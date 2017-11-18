<?php
	include('login.php'); // Includes Login Script
  if(isset($_SESSION['login_user'])){
		header("location: profile.php");
	}

  $array = array('apple','orange'); 
  $dbname = 'stich_db1';
  extractEmailsFromDB($dbname);
  // echo json_encode($emails);
?>

<!DOCTYPE html>
<html >
<meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <!--- Google Material Design API-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-amber.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<head>
  <style>
  .div1 {
    margin-left: 40px;
  }
</style>
  <script type=text/javascript>
	
	function validateLoginForm() {
    var email = document.getElementById("email_login").value;
    var password = document.getElementById("password_login").value;
		if(getCookie(email) != password && confirm("Save password?")) {
      setCookie(email,password,1/24)
		}
		return true;
	}

  function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires="+ d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
	
	function validateSignupForm() {
		//validate email address
		if(!validateEmail(document.getElementById("email").value))
		{
			alert("You have entered an invalid email address!");
			return false;
		}
		//validate password
		var password1 = document.getElementById("password").value;
		var password2 = document.getElementById("confirm_password").value;
		if(password1 != password2) {
			alert("Passwords do not match!");
			return false;
		}
		if(!checkPassword(password1)) {
			alert('Invalid password! Must be  between 6 to 20 characters with at least one numeric digit, one uppercase, and one lowercase letter');
			return false;
		}
		return true;
	}
	
	function validateEmail(email_address)   {
		var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		return email_regex.test(email_address);
	}  
	
	function checkPassword(password) {
		var passw_regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;  
		return password.match(passw_regex);
	}
  </script>
  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
		<div id="login">   
          <h1>Welcome!</h1>
          
          <form action="index.php" method="post" onsubmit="return validateLoginForm()">
          
          <div class="field-wrap">
            <input placeholder="email address" type="email" id="email_login" name="email_login" required autocomplete="on" />
          </div>
          
          <div class="field-wrap">
            <input placeholder="password" id="password_login" name="password_login"type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button name="submit_login" type="submit" class="button button-block"/>Log In</button>
		  
		  <div> <?php echo $login_error ?> </div>
          </form>
        </div>
		
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          <!-- action="signupSubmit.php" -->
          <form  action="signupSubmit.php" method="post" onsubmit="return validateSignupForm()">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input name="firstname" type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input name="lastname" type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input id="email" name="email" type="email"required autocomplete="off"/>
          </div>
          
		  <div class="top-row">
            <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input id="password" name="password" type="password" required autocomplete="off"/>
			</div>
		  
			<div class="field-wrap">
				<label>
				  Confirm Password<span class="req">*</span>
				</label>
				<input id="confirm_password" type="password"required autocomplete="off"/>
			</div>
          </div>
		  
          <button type="submit" class="button button-block"/>Get Started</button>
          <!-- <span><?php echo $signup_error; ?></span> -->
          </form>
        </div>
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="http://autocompletejs.com/releases/0.3.0/autocomplete-0.3.0.min.js"></script>
  <link href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet"></link>
  <script
        src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <script type="text/javascript">
    var email_array = <?php echo json_encode($emails); ?>;
    $("#email_login").autocomplete({
        source:email_array,
        select:function(event,ui) {
          var email = ui.item.label;
          var password = getCookie(email);
          if(password != "") {
            $("#password_login").val(password);
          }
        }
      });
  </script>
</body>
</html>
