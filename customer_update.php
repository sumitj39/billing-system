<?php
require("db_connection.php");

$customer_id=$_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$customer_contactno=$_POST['customer_contactno'];
$customer_address=$_POST['customer_address'];
$customer_balance=$_POST['customer_balance'];



$sql = "UPDATE `customer` SET
`customer_id`='$customer_id',
`customer_name`='$customer_name',
`customer_contactno`='$customer_contactno',
`customer_address`='$customer_address',
`customer_balance`='$customer_balance'

where customer_id='$customer_id'";



$result=mysqli_query($conn,$sql);



if(! $result)
{
    echo '<script type="text/javascript">
    alert(" Not Successfully updated");
    window.location="customer_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert(" Successfully Updated");
    window.location="customer_view.php";
    </script>';
}

?>

   

