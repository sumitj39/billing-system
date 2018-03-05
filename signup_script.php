<?php
	
    // If the values are posted, insert them into the database.
   // echo "hello";
    //var_dump($_POST);
    //var_dump($_SERVER);
    //var_dump($_POST);
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

		$username = stripslashes($username);
        $password = stripslashes($password);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo $username, $password;
        echo $hashed_password;
        $query = "INSERT INTO `admin`(`admin_name`, `admin_password`) VALUES ('$username','$hashed_password')";
        //INSERT INTO `admin` (admin_name, admin_password) VALUES ('$username', '$hashed_password')";
        echo $query;
        require('db_connection.php');
        $result = mysqli_query($conn, $query);
        echo $result;
        var_dump($result);
        echo "lsdjfldsjf";
        if($result){
            echo "User Created Successfully\n  ";
			echo "Redirecting to login...\n";
			header( "refresh:3;url='login.php'" );
        }else{
            $msg ="User Registration Failed";
            echo $msg;
        }
    }
  ?>
