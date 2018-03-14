
<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$email = $_POST['admin_email'];
	$adminname = $_POST['admin_name'];
	require "db_connection.php";

	$sqlstmt = "select * from `admin` where `admin_name`='$adminname'";
	$result  = mysqli_query($conn, $sqlstmt);
	$admin = mysqli_fetch_array($result);
	if(! $admin){
		echo ("No record found!");
		die();
	}
	if($admin['admin_email'] != $email){
		echo "<script> alert('Email entered is wrong'); window.location='forgot_password.php';</script>";
		die();
	}

	require_once "PHPMailer.php";
	require_once "SMTP.php";

	$mail  = new PHPMailer\PHPMailer\PHPMailer();
	echo("$email $adminname");
	//Enable SMTP debugging. 
	//$mail->SMTPDebug = 3;                               
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = "smtp.gmail.com";
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = "suppi@gmail.com";                 
	$mail->Password = "your password here";                           
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to 
	$mail->Port = 587;                                   

	$mail->From = "suppi@gmail.com";
	$mail->FromName = "Suppi";

	
	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = "Recover Password";
	$mail->Body = "<i>Mail body in HTML</i>";
	

	//$mail->AltBody = "This is the plain text version of the email content";
	$host = "http://$_SERVER[HTTP_HOST]";//$_SERVER[REQUEST_URI]"; 
	$emailBody = "<div> $adminname ,<br><br><p>Click this link to recover your password<br><a href='$host/reset_password.php?name=$adminname'>Link</a><br><br></p>Regards,<br> Password Recovery.</div>";
	$mail->Body = $emailBody;
	if(!$mail->send()) 
	{
		echo "coming";
		echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
		echo "<br><br>Message has been sent successfully. Check your mail";
	}
}
?>

<?php
/*if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $admin["admin_name"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $admin["admin_name"] . "'>" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $admin["admin_name"] . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($admin["admin_email"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';
}
*/
?>