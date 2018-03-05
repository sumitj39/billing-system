<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {	
$error = "Username or Password is invalid";
}
else
{
	echo  "post";
// // Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// // Establishing Connection with Server by passing server_name, user_id and password as a parameter
// // To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);

$result = mysqli_query($conn,"SELECT * FROM admin WHERE admin_name='$username'");

	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
		$hashed_password=$row['admin_password'];
		echo $hashed_password;
		if(password_verify($_POST['password'], $hashed_password)) {
			$_SESSION["login_user"] = $row['admin_name'];
		header("location: index.php"); 
		}
		else {
			$error = "Password invalid";
			echo $error;
		}
	}
	else {
echo "Username not found";
	} 
}
}
?>