<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="billing-system";
//cretae connection
$conn=mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn)
{
die("connection failed:".mysqli_connect_erre());    
}



$admin_id=$_POST['admin_id'];
$admin_name=$_POST['admin_name'];
$admin_password=$_POST['admin_password'];
$admin_email=$_POST['admin_email'];


$sql = "INSERT INTO `admin`(`admin_id`,`admin_name`,`admin_password`,`admin_email`) VALUES 
('$admin_id','$admin_name','$admin_password',
'$admin_email')";

$result=mysqli_query($conn,$sql);



if(! $result)

{
    echo '<script type="text/javascript">
    alert("Record Not Added");
    window.location="admin_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Added Successfully");
    window.location="admin_view.php";
    </script>';
}

?>