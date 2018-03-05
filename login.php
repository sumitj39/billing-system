<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	require 'db_connection.php';

	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$result = mysqli_query($conn,"SELECT * FROM `admin` WHERE `admin_name`='$username'");

	$errmsg="";
	if(!result){
		$errmsg = $errmsg."Incorrect username or password ";
	}
	$row  = mysqli_fetch_array($result);
	$hashed_password=$row['admin_password'];
	if(password_verify($password, $hashed_password)) {
		$_SESSION["login_user"] = $username;
		header("location: index.php"); 
	}
	else{
		$errmsg = $errmsg."Incorrect username or password";
	}
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>CEW signup</title>
<link href="templates/css/style_login_signup.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat UI Web Form Widget and Kit,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
	<div class="login-01">
		<div class="one-login  hvr-float-shadow">
			<div class="one-login-head">
					<img src="templates/images/top-lock.png" alt=""/>
					<h1>LOGIN</h1>
					<span></span>
			</div>
			<form name = "loginForm" method="POST" action='login.php' onsubmit="required()">
				<li style="background:red"><?php echo($errmsg);?></li>
				<div class="p-container">
							<div class="clear"></div>
				</div>
				<li>
					<input type="text" class="text" name = "username" placeholder="username" required/>
				</li>
				<li>
					<input type="password" placeholder="Password" name="password" value="" required/>
				</li>
				<div class="p-container">
							<div class="clear"></div>
				</div>
				<div class="submit">
						<input type="submit" value="SIGN IN" >
				</div>
					<h5>Don't have an account ?<a href="signup.php"> Sign Up </a></h5>
				</form>
		</div>
	</div>
	<!--/start-login-two-->

	<!--//End-login-form-->
	<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>Copyright &copy; 2015  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!--//end-copyright-->
	<script>
		function required()
			{
			var emptUser = document.forms["loginForm"]["username"].value;
			var emptPass = document.forms["loginForm"]["password"].value;
			var msg = "";

			if (emptUser == "")
			{
				msg += "Please input a username";
				alert("Input username");
				return false;
			}
			if(emptPass == ""){
				msg += "Please input a password";
			}
			if(msg.length > 0){
				alert(msg);
				return false;
			}
			else 
			{
				return true; 
			}
		}
	</script>
</body>
</html>