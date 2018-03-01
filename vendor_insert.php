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



$vendor_id=$_POST['vendor_id'];
$vendor_fullname=$_POST['vendor_fullname'];
$vendor_company=$_POST['vendor_company'];
$vendor_address=$_POST['vendor_address'];
$vendor_email=$_POST['vendor_email'];
$vendor_contactno=$_POST['vendor_contactno'];


$sql = "INSERT INTO `vendor`(`vendor_id`,`vendor_fullname`,`vendor_company`,`vendor_address`,`vendor_email`,`vendor_contactno`) VALUES ('$vendor_id','$vendor_fullname','$vendor_company','$vendor_address','$vendor_email','$vendor_contactno')";

$result=mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Added");
    window.location="vendor_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Added Successfully");
    window.location="vendor_view.php";
    </script>';
}

?>