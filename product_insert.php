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



$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$qty=$_POST['qty'];


$sql = "INSERT INTO `product`(`product_id`,`product_name`,`product_price`,`qty`) VALUES ('$product_id','$product_name','$product_price','$qty')";

$result=mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Added");
    window.location="product_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Added Successfully");
    window.location="product_view.php";
    </script>';
}

?>