<?php
require("db_connection.php");

$sales_id=$_POST['sales_id'];
$product_id=$_POST['product_id'];
$customer_id=$_POST['customer_id'];
$sales_price=$_POST['sales_price'];
$sales_qty=$_POST['sales_qty'];
$sales_date=$_POST['sales_date'];
$bill_id=$_POST['bill_id'];





$sql = "UPDATE `sales` SET
`sales_id`='$sales_id',
`product_id`='$product_id',
`customer_id`='$customer_id',
`sales_price`='$sales_price',
`sales_qty`='$sales_qty',
`sales_date`='$sales_date',
`bill_id`='$bill_id'

where sales_id='$sales_id'";



$result=mysqli_query($conn,$sql);



if(! $result)
{
    echo '<script type="text/javascript">
    alert(" Not Successfully updated");
    window.location="sales_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert(" Successfully Updated");
    window.location="sales_view.php";
    </script>';
}

?>

   

