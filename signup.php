<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		do{
			$errmsg='';

			$username=$_POST['username'];
			$password = $_POST['password'];
			$mailid = $_POST['email'];
			if(empty($username) || empty($password) || empty($mailid)){
				$errmsg = $errmsg."All fields are mandatory";
				break;
			}
		}while(0);

		$username = stripslashes($username);
		$password = stripslashes($password);
		$mailid = stripslashes($mailid);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$query = "INSERT INTO `admin`(`admin_name`, `admin_password`, `admin_email`) VALUES ('$username','$hashed_password','$mailid')";

		require('db_connection.php');
		$result = mysqli_query($conn, $query);
		do{
			if(!$result){
				$errmsg = $errmsg."Could Not create user. Try again";
				break;
			}
			else{
				$_SESSION["login_user"] = $username;
				header("location: index.php");
				die();
			}
		}while(0);
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
    <meta name="keywords" content="Flat UI Web Form Widget and Kit,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"
        ./>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet'
        type='text/css'>
    <!--//webfonts-->
</head>

<body>
    <div class="login-02">
        <div class="two-login  hvr-float-shadow">
            <div class="two-login-head">
                <img src="templates/images/top-note.png" alt="" />
                <h2>Register</h2>
                <lable></lable>
            </div>
            <form action="" method="POST">
				<li style="background:red"> <?php echo $errmsg; ?> </li>
                <li>
                    <input type="text" class="text" name = "username" placeholder="Username" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Username';}" required/>
                </li>
                <li>
                    <input type="password" placeholder="Password" name="password" onfocus="this.placeholder = '';" onblur="if (this.placeholder== '') {this.placeholder = 'Password';}" required/>
                </li>
                <li>
                    <input type="text" class="text" name='email' Placeholder="E-mail" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'E-mail';}" required/>
                </li>
                <div class="submit two">
                    <input type="submit" onclick="myFunction()" value="SIGN UP">
                </div>
                <h5>Already a member ?
                    <a href="login.php"> Login Here</a>
                </h5>
            </form>
        </div>
    </div>

    <!--//End-login-form-->
    <!--start-copyright-->
    <div class="copy-right">
        <div class="wrap">
            <p>Copyright &copy; 2015 All rights Reserved | Template by &nbsp;
                <a href="http://w3layouts.com">W3layouts</a>
            </p>
        </div>
    </div>
    <!--//end-copyright-->
</body>

</html>