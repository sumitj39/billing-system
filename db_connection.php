<?php

$servername = "localhost";
$username = "root";
$password = "98765432";
$dbname ="billing-system";
//create connection
$conn=mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn)
{
die("connection failed:".mysqli_connect_error());    
}


?>
