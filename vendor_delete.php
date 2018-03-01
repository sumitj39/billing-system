<?php
require("db_connection.php");
$vendor_id=$_REQUEST['id'];
$sql = 'DELETE FROM `vendor` where vendor_id="'.$vendor_id.'"';
$result = mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Deleted");
    window.location="vendor_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    
    alert("Record Deleted Successfully");
    window.location="vendor_view.php";
    </script>';
}
?>