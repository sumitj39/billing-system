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



$purchase_id=$_POST['purchase_id'];
$product_id=$_POST['product_id'];
$vendor_id=$_POST['vendor_id'];
$purchase_qty=$_POST['purchase_qty'];
$purchase_date=$_POST['purchase_date'];


$sql = "INSERT INTO `purchase`(`purchase_id`,`product_id`,`vendor_id`,`purchase_qty`,`purchase_date`) VALUES ('$purchase_id','$product_id','$vendor_id','$purchase_qty','$purchase_date')";

$result=mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Added");
    window.location="purchase_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Added Successfully");
    window.location="purchase_view.php";
    </script>';
}

?>