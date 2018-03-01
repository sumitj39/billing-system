<?php
require("db_connection.php");

$bill_id=$_POST['bill_id'];
$customer_id=$_POST['customer_id'];
$admin_id=$_POST['admin_id'];
$no_of_items=$_POST['no_of_items'];
$bill_date=$_POST['bill_date'];
$total=$_POST['total'];



$sql = "UPDATE `bill` SET
`bill_id`='$bill_id',
`customer_id`='$customer_id',
`admin_id`='$admin_id',
`no_of_items`='$no_of_items',
`bill_date`='$bill_date',
`total`='$total'
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