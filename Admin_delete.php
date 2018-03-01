<?php
require("db_connection.php");
$admin_id=$_REQUEST['id'];
$sql = 'DELETE FROM `admin` where admin_id="'.$admin_id.'"';
$result = mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Deleted");
    window.location="admin_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    
    alert("Record Deleted Successfully");
    window.location="admin_view.php";
    </script>';
}
?>