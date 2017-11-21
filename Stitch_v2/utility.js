function checkUserLoggedIn(username) 
{
	if(username.length > 0) {
    document.getElementById("header").innerHTML += ": "+username;
    document.getElementById("sign_in").innerHTML = "Log out";
    document.getElementById("sign_in").href = "logout.php";
  } 
  return username.length > 0;
}