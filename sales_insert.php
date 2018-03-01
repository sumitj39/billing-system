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



$sales_id=$_POST['sales_id'];
$product_id=$_POST['product_id'];
$customer_id=$_POST['customer_id'];
$sales_price=$_POST['sales_price'];
$sales_qty=$_POST['sales_qty'];
$sales_date=$_POST['sales_date'];
$bill_id=$_POST['bill_id'];



$sql = "INSERT INTO `sales` (`sales_id`,`product_id`,`customer_id`,`sales_price`,`sales_qty`,`sales_date`,`bill_id`) VALUES ('$sales_id','$product_id','$customer_id','$sales_price','$sales_qty','$sales_date','$bill_id')";



$result=mysqli_query($conn,$sql);
if(! $result)
{
    echo '<script type="text/javascript">
    alert("Record Not Added");
    window.location="sales_form.php";
    </script>';
        
}
else
{
    echo '<script type="text/javascript">
    alert("Record Added Successfully");
    window.location="sales_view.php";
    </script>';
}

?>
