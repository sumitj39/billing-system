<?php
require("db_connection.php");
$sales_id=$_REQUEST['id'];
$sql = 'DELETE FROM `sales` where sales_id="'.$sales_id.'"';
$result = mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Deleted");
    window.location="sales_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Deleted Successfully");
    window.location="sales_view.php";
    </script>';
}
?>