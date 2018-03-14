<?php
	if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "", "billing-system");
		
		$condition = "";
		if(!empty($_POST["admin_name"])) 
			$condition = " admin_name = '" . $_POST["admin_name"] . "'";
		if(!empty($_POST["admin-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " admin_email = '" . $_POST["admin-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from admin " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
?>