<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="billing-system";
//cretae connection
$conn=mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn)
{
die("connection failed:".mysqli_connect_erre());    
}



$bill_id=$_POST['bill_id'];
$customer_id=$_POST['customer_id'];
$admin_id=$_POST['admin_id'];
$no_of_items_id=$_POST['no_of_items'];
$bill_date=$_POST['bill_date'];
$total=$_POST['total'];


$sql = "INSERT INTO `bill` (`bill_id`,`customer_id`,`admin_id`,`bill_date`,`total`) VALUES ('$bill_id','$customer_id','$admin_id','$bill_date','$total')";



$result=mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Added");
    window.location="bill_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Added Successfully");
    window.location="bill_view.php";
    </script>';
}

?>
