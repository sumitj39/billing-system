<?php
require("db_connection.php");

$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$qty=$_POST['qty'];



$sql = "UPDATE `product` SET
`product_id`='$product_id',
`product_name`='$product_name',
`product_price`='$product_price',
`qty`=$qty

where product_id='$product_id'";



$result=mysqli_query($conn,$sql);



if(! $result)
{
    echo '<script type="text/javascript">
    alert(" Not Successfully updated");
    window.location="product_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert(" Successfully Updated");
    window.location="product_view.php";
    </script>';
}

?>

   

