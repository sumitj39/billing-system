<?php
	require "session.php";
?>

<html>
<body>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require ("db_connection.php");
    //purchase_id	product_id	vendor_id	purchase_qty	purchase_date
    $phoneNumber = $_POST['phoneNumber'];
    $vendor_query = "SELECT `vendor_id` FROM `vendor` WHERE vendor_contactno= {$phoneNumber}";
    echo($vendor_query."<br>");
    $result = mysqli_query($conn, $vendor_query);
    if(!$result){
        die("No vendorid found that matches $phoneNumber");
    }
    if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $vendor_id = $row['vendor_id'];
        echo($vendor_id."<br>");
        $totalItems = $_POST["totalItems"];
        echo($totalItems."<br>");
        $sum=0;
        for ($i=1; $i <= $totalItems; $i++) {
            $itemName = $_POST["itemName".$i];
            $purchase_qnty = $_POST["itemQnty".$i];
//            echo($itemName." ".$purchase_qnty."<br>");
            $product_result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_name`='".$itemName."'");
            if(!$product_result){
                die("No product results for query");
            }
            //$prodobj = mysqli_affected_rows
            $product_obj = mysqli_fetch_array($product_result,MYSQLI_BOTH);
            if (! $product_obj){
                die("No product results for query");
            }
            $product_id = $product_obj['product_id'];
            $product_qnty = $product_obj['qty'];
            $sum = abs((int)$purchase_qnty) + (int)$product_qnty;
            $purchase_date = '07-25-2012';
            $purchase_insert_query = "INSERT INTO `purchase`(`product_id`, `vendor_id`, `purchase_qty`, `purchase_date`) 
            VALUES ($product_id,$vendor_id,$purchase_qnty,STR_TO_DATE('$purchase_date','%m-%d-%Y'))";
            $purchase_insert_result = mysqli_query($conn, $purchase_insert_query);
            if(!$purchase_insert_result){
                //die("Error inserting to database");
                echo '<script type="text/javascript">
                    alert("Record Not Added");
                    window.location="purchase_form.php";
                    </script>';
            }
            echo($purchase_insert_query."<br>");
            //echo();
            $product_insert_query = "UPDATE `product`
            SET `qty`='$sum' 
            WHERE `product_id`='$product_id'";
            mysqli_query($conn,$product_insert_query);
        }
        echo '<script type="text/javascript">
            alert("Record Added Successfully");
            window.location="purchases.php";
            </script>';
        /*

        $bill_date = "2010-10-10";
        $admin_id_result = mysqli_query($conn,"SELECT `admin_id` FROM `admin` LIMIT 1");
        $admin_id = mysqli_fetch_array($admin_id_result, MYSQLI_ASSOC);
        $admin_id = $admin_id['admin_id'];
        $bill_insert_query = "INSERT INTO `bill`(`customer_id`, `admin_id`, `no_of_items`, `bill_date`, `total`)
        VALUES ({$customer_id},{$admin_id},{$totalItems},STR_TO_DATE('07-25-2012','%m-%d-%Y'),{$sum})";
        echo($bill_insert_query."<br>");
        $result = mysqli_query($conn, $bill_insert_query);
        if(!$result){
            die("CouldN   ot execute query. error".mysqli_error());
        }
        $bill_id = mysqli_insert_id($conn);
        echo($bill_id."<br>");
        for($i=1;$i<=$totalItems;$i++){
            $prodName = (int)$_POST["itemName".$i];
            $prodPrice = (int)$_POST["itemPrice".$i];
            $ans=mysqli_query($conn, "select `product_id` from `product` where `product_name`={$prodName}");
            if(! $ans){
                die("Product does not exist in database");
            }
            $ansRow = mysqli_fetch_array($ans,MYSQLI_ASSOC);
            $product_id = $ansRow["product_id"];
            $qnty = 1;
            $sales_insert_query = "INSERT INTO `sales`(`product_id`, `customer_id`, `sales_price`, `sales_qty`, `sales_date`, `bill_id`)
             VALUES ({$product_id},{$customer_id},{$prodPrice},{$qnty},STR_TO_DATE('07-25-2012','%m-%d-%Y'),{$bill_id})";
            echo($sales_insert_query."<br>");
            $result = mysqli_query($conn, $sales_insert_query);
            if(!$result){
                die("Could   addsfa Not execute query. error".mysqli_error());
            }
        }*/
    }
    //header("Location: sales.php");
    //die();
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("Location: purchase_form.php");
    die();
}
?>
</body>
</html>
