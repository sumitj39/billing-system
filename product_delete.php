<?php
require("db_connection.php");
$product_id=$_REQUEST['id'];
$sql = 'DELETE FROM `product` where product_id="'.$product_id.'"';
$result = mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Deleted");
    window.location="product_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Deleted Successfully");
    window.location="product_view.php";
    </script>';
}
?>