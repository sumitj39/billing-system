<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td><a href="purchase_form.php">ADD</a></td>
            <td colspan="7" align="center"> purchase details</td>
        </tr>
        <tr>
            <td><b>purchase_id</b></td>
            <td><b>product_id</b></td>
            <td><b>vendor_id</b></td>
            <td><b>purchase_qty</b></td>
            <td><b>purchase_date</b></td>
            <td><b>update</b></td>
            <td><b>delete</b></td>
        </tr>
        <?php
       require("db_connection.php");
       
       $sql = 'SELECT * FROM `purchase`';
       
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
        ?>
            <tr>
                <td>
                    <?php echo ($row['purchase_id']); ?> </td>
                <td>
                    <?php echo ($row['product_id']); ?> </td>
               
                <td>
                    <?php echo ($row['vendor_id']); ?> </td>
            
                <td>
                    <?php echo ($row['purchase_qty']); ?> </td>

                    <td>
                    <?php echo ($row['purchase_date']); ?>
                     </td>
                
                
                <td><a href="purchase_edit.php?id=<?php echo $row['purchase_id']; ?>">edit</a></td>
                 <td><a href="purchase_delete.php?id=<?php echo $row['purchase_id']; ?>">delete</a></td>

            </tr>
            <?php
       }
        ?>
    </table>

</body>

</html>
