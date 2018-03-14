<?php
    $bill_id = $_REQUEST['bill_id'];
    require("db_connection.php");
    $sql = "SELECT * FROM `sales` where `bill_id`='$bill_id'";
    echo($sql);
    $result = mysqli_query($conn, $sql);
    echo mysqli_num_rows($result);
    while($sale = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $product_id=$sale['product_id'];
        echo "SELECT * from `product` where `product_id`='$product_id'";
        $prodresult=mysqli_query($conn, "SELECT * from `product` where `product_id`='$product_id'");
        $product = mysqli_fetch_array($prodresult, MYSQLI_ASSOC);
        if(! $product){
            echo '<script type="text/javascript">
            alert(" product not found");
            window.location="sales.php";
            </script>';
        }
    }
?>