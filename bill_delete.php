<?php
require("db_connection.php");
$bill_id=$_REQUEST['id'];
$sql = 'DELETE FROM `bill` where bill_id="'.$bill_id.'"';
$result = mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Deleted");
    window.location="bill_view.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    
    alert("Record Deleted Successfully");
    window.location="bill_view.php";
    </script>';
}
?>