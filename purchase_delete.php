<?php
require("db_connection.php");
$purchase_id=$_REQUEST['id'];
$sql = 'DELETE FROM `purchase` where purchase_id="'.$purchase_id.'"';
$result = mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Deleted");
    window.location="purchase_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    
    alert("Record Deleted Successfully");
    window.location="purchase_view.php";
    </script>';
}
?>