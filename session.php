<?php
include 'db_connection.php';
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$result = mysqli_query($conn,"SELECT * FROM admin WHERE admin_name='" . $user_check . "'");

$row  = mysqli_fetch_array($result);
	if(!is_array($row)) {
	header('Location: login.php'); // Redirecting To Home Page
	}
?>