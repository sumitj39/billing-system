<?php
session_start();
if(isset($_SESSION['login_user'])){
unset($_SESSION['login_user']);
session_destroy();
echo "Signed out \n";
}
			echo "Redirecting to login...\n";
			header( "refresh:3;url='login.php'" );
?>
