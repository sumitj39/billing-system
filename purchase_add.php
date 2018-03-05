<?php
	require "session.php";
?>

<html>
<body>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();
    require ("db_connection.php");
    //purchase_id	product_id	vendor_id	purchase_qty	purchase_date
    $phoneNumber = $_POST['phoneNumber'];
    $vendor_query = "SELECT * FROM `vendor` WHERE vendor_contactno= '{$phoneNumber}'";
    $result = mysqli_query($conn, $vendor_query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(!$row){
        
        $_SESSION['error_message'] = "No vendorid found that matches '$phoneNumber'";
        header("Location:error.php");
        die();
    }
    else{
        $vendor_id = $row['vendor_id'];
        echo($vendor_id."<br>");
        $totalItems = $_POST["totalItems"];
        echo($totalItems."<br>");
        $sum=0;
        for ($i=1; $i <= $totalItems; $i++) {
            $itemName = $_POST["itemName".$i];
            echo("$itemName<br>");
            $purchase_qnty = $_POST["itemQnty".$i];
            $product_result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_name`='".$itemName."'");
            $product_obj = mysqli_fetch_array($product_result,MYSQLI_BOTH);
            if (! $product_obj){
                $_SESSION['error_message'] = "No product results for product '$itemName'";
                header("Location:error.php");
                die();
            }

            $product_id = $product_obj['product_id'];
            $product_qnty = $product_obj['qty'];
            $sum = abs((int)$purchase_qnty) + (int)$product_qnty;
            $purchase_date = '07-25-2012';
            $purchase_insert_query = "INSERT INTO `purchase`(`product_id`, `vendor_id`, `purchase_qty`, `purchase_date`) 
            VALUES ('$product_id','$vendor_id','$purchase_qnty',STR_TO_DATE('$purchase_date','%m-%d-%Y'))";
            $purchase_insert_result = mysqli_query($conn, $purchase_insert_query);
            if(!$purchase_insert_result){
                $_SESSION['error_message'] = "Record Not Added";
                header("refresh:2;Location:error.php;"); 
            }
            $product_insert_query = "UPDATE `product`
            SET `qty`='$sum' 
            WHERE `product_id`='$product_id'";
            mysqli_query($conn,$product_insert_query);
        }
        echo '<script type="text/javascript">
            alert("Record Added Successfully");
            window.location="purchases.php";
            </script>';
    }
    
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("Location: purchase_form.php");
    die();
}
}?>
</body>
</html>
