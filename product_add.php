<?php
	require "session.php";
?>
<?php

require "db_connection.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $qty=$_POST['qty'];
    $sql = "INSERT INTO `product`(`product_name`,`product_price`,`qty`) VALUES ('$product_name','$product_price','$qty')";
    $result=mysqli_query($conn,$sql);
    if(! $result){
        echo '<script type="text/javascript">
        alert("Record Not Added.Try Again");
        window.location="product_form.php";
        </script>';
            
    }
    else{
        echo '<script type="text/javascript">
        alert("Record Added Successfully");
        window.location="products.php";
        </script>';
    }
}


?>