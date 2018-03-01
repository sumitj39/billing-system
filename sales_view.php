<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td><a href="sales_form.php">ADD</a></td>
            <td colspan="8" align="center"> sales details</td>
        </tr>
        <tr>
            <td><b>sales_id</b></td>
            <td><b>product_id</b></td>
            <td><b>customer_id</b></td>
            <td><b>sales_price</b></td>
            <td><b>sales_qty</b></td>
            <td><b>sales_date</b></td>
            <td><b>bill_id</b></td>
            <td><b>update</b></td>
            <td><b>delete</b></td>
        </tr>
        <?php
       require("db_connection.php");
       
       $sql = 'SELECT * FROM `sales`';
       
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
        ?>
            <tr>
                <td>
                    <?php echo ($row['sales_id']); ?> </td>
                <td>
                    <?php echo ($row['product_id']); ?> </td>
               
                <td>
                    <?php echo ($row['customer_id']); ?> </td>
            
                <td>
                    <?php echo ($row['sales_price']); ?> </td>
                 <td>
                    <?php echo ($row['sales_qty']); ?> </td>

                <td>
                    <?php echo ($row['sales_date']); ?></td>
                 <td>
                    <?php echo ($row['bill_id']); ?></td>
                
                
                <td><a href="sales_edit.php?id=<?php echo $row['sales_id']; ?>">edit</a></td>
                 <td><a href="sales_delete.php?id=<?php echo $row['sales_id']; ?>">delete</a></td>

            </tr>
            <?php
       }
        ?>
    </table>

</body>

</html>
