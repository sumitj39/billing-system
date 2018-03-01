<html>
<body>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require ("db_connection.php");

    $phoneNumber = $_POST['phoneNumber'];
    $customer_query = "SELECT * FROM customer WHERE customer_contactno= {$phoneNumber}";
    $result = mysqli_query($conn, $customer_query);
    if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $customer_id = $row['customer_id'];
        $totalItems = $_POST["totalItems"];
        $sum=0;
        for ($i=1; $i <= $totalItems; $i++) { 
            $price = $_POST["itemPrice".$i];
            $sum = $sum + (int)$price;
            echo($price);
            echo("<br>");
        }
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
        }
    }
    header("Location: sales.php");
    die();
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("Location: bill.php");
    die();
}
?>
</body>
</html>
