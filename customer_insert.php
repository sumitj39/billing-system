<?php

    if($_REQUEST['REQUEST_METHOD'] === 'GET'){
        header("Location: customers.php");
        die();
    }
    require("db_connection.php");
    $customer_name = $_POST['fullName'];
    $customer_contactno = $_POST['phoneNumber'];
    $customer_address = $_POST['address'];
    $customer_balance = $_POST['balance'];

    $sql = "INSERT INTO `customer` (`customer_name`,`customer_contactno`,`customer_address`,
`customer_balance`) VALUES
('$customer_name',
'$customer_contactno','$customer_address','$customer_balance')";

    $result = mysqli_query($conn, $sql);

    if (!$result) 
    {
        echo '<script type="text/javascript">
            alert("Record Not Added");
            window.location="customers.php";
            </script>';
                
    }
    else
    {
            echo '<script type="text/javascript">
            alert("Record Added Successfully");
            window.location="customers.php";
            </script>';    
    }
?>
