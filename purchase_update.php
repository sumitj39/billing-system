<?php
require("db_connection.php");

$purchase_id=$_POST['purchase_id'];
$product_id=$_POST['product_id'];
$vendor_id=$_POST['vendor_id'];
$purchase_qty=$_POST['purchase_qty'];
$purchase_date=$_POST['purchase_date'];



$sql = "UPDATE `purchase` SET
`purchase_id`='$purchase_id',
`product_id`='$product_id',
`vendor_id`='$vendor_id',
`purchase_qty`='$purchase_qty',
`purchase_date`='$purchase_date'

where product_id='$product_id'";



$result=mysqli_query($conn,$sql);



if(! $result)
{
    echo '<script type="text/javascript">
    alert(" Not Successfully updated");
    window.location="purchase_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert(" Successfully Updated");
    window.location="purchase_view.php";
    </script>';
}

?>

   

