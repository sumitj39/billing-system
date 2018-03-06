<?php
require('db_connection.php');
$vendor_fullname=$_POST['vendor_fullname'];
$vendor_company=$_POST['vendor_company'];
$vendor_address=$_POST['vendor_address'];
$vendor_email=$_POST['vendor_email'];
$vendor_contactno=$_POST['vendor_contactno'];
$sql = "INSERT INTO `vendor`(`vendor_fullname`,`vendor_company`,`vendor_address`,`vendor_email`,`vendor_contactno`) VALUES ('$vendor_fullname','$vendor_company','$vendor_address','$vendor_email','$vendor_contactno')";
$result=mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Added");
    window.location="vendors.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Added Successfully");
    window.location="vendors.php";
    </script>';
}

?>