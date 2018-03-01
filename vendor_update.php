<?php
require("db_connection.php");

$vendor_id=$_POST['vendor_id'];
$vendor_fullname=$_POST['vendor_fullname'];
$vendor_company=$_POST['vendor_company'];
$vendor_address=$_POST['vendor_address'];
$vendor_email=$_POST['vendor_email'];
$vendor_contactno=$_POST['vendor_contactno'];


$sql = "UPDATE `vendor` SET
`vendor_id`='$vendor_id',
`vendor_fullname`='$vendor_fullname',
`vendor_company`='$vendor_company',
`vendor_address`='$vendor_address' 
`vendor_email`='$vendor_email'
`vendor_contactno`='$vendor_contactno'
where vendor_id='$vendor_id'";

$result=mysqli_query($conn,$sql);



if(! $result)
{
    echo '<script type="text/javascript">
    alert(" Not Successfully updated");
    window.location="vendor_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert(" Successfully Updated");
    window.location="vendor_view.php";
    </script>';
}

?>

