<?php
	require 'db_connection.php';
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	session_start();// Starting Session
	// Storing Session
	if(!isset($_SESSION['login_user'])){
		header('Location: login.php');
}
?>