<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td><a href="customer_form.php">ADD</a></td>
            <td colspan="7" align="center"> customer details</td>
        </tr>
        <tr>
            <td><b>customer_id</b></td>
            <td><b>customer_name</b></td>
            <td><b>customer_contactno</b></td>
            <td><b>customer_address</b></td>
            <td><b>customer_balance</b></td>
            <td><b>update</b></td>
            <td><b>delete</b></td>
        </tr>
        <?php
       require("db_connection.php");
       
       $sql = "SELECT * FROM customer";
       
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
        ?>
            <tr>
                <td>
                    <?php echo ($row['customer_id']); ?> </td>
                <td>
                    <?php echo ($row['customer_name']); ?> </td>
               
                <td>
                    <?php echo ($row['customer_contactno']); ?> </td>
            
                 <td>
                    <?php echo ($row['customer_address']); ?> </td>

                <td>
                    <?php echo ($row['customer_balance']); ?> </td>
               
                <td><a href="customer_edit.php?id=<?php echo $row['customer_id']; ?>">edit</a></td>
                 <td><a href="customer_delete.php?id=<?php echo $row['customer_id']; ?>">delete</a></td>

            </tr>
            <?php
       }
        ?>
    </table>

</body>

</html>
