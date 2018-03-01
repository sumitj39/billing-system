<?php
require("db_connection.php");
$customer_id=$_REQUEST['id'];
$sql = 'DELETE FROM `customer` where customer_id="'.$customer_id.'"';
$result = mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Deleted");
    window.location="customer_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    
    alert("Record Deleted Successfully");
    window.location="customer_view.php";
    </script>';
}
?>