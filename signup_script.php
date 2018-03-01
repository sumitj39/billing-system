<?php
	include('db_connection.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
			$password = $_POST['password'];
			$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO `admin` (admin_name, admin_password) VALUES ('$username', '$hashed_password')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "User Created Successfully\n  ";
			echo "Redirecting to login...\n";
			header( "refresh:3;url='login.php'" );
        }else{
            $msg ="User Registration Failed";
        }
		
    }
?>