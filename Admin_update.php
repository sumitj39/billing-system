<?php
require("db_connection.php");

$admin_id=$_POST['admin_id'];
$admin_name=$_POST['admin_name'];
$admin_password=$_POST['admin_password'];
$admin_email=$_POST['admin_email'];



$sql = "UPDATE `admin` SET
`admin_id`='$admin_id',
`admin_name`='$admin_name',
`admin_password`='$admin_password',
`admin_email`='$admin_email'
where admin_id='$admin_id'";

$result=mysqli_query($conn,$sql);



if(! $result)
{
    echo '<script type="text/javascript">
    alert(" Not Successfully updated");
    window.location="admin_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert(" Successfully Updated");
    window.location="admin_view.php";
    </script>';
}

?>

