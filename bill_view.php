<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td><a href="bill_form.php">ADD</a></td>
            <td colspan="7" align="center"> bill details</td>
        </tr>
        <tr>
            <td><b>bill_id</b></td>
            <td><b>customer_id</b></td>
            <td><b>admin_id</b></td>
            <td><b>no_of_items</b></td>
            <td><b>bill_date</b></td>
            <td><b>total</b></td>            
            <td><b>update</b></td>
            <td><b>delete</b></td>
        </tr>
        <?php
       require("db_connection.php");
       
       $sql = "SELECT * FROM bill";
       
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
        ?>
            <tr>
                <td>
                    <?php echo ($row['bill_id']); ?> </td>
                <td>
                    <?php echo ($row['customer_id']); ?> </td>
               
                <td>
                    <?php echo ($row['admin_id']); ?> </td>
            
                <td>
                    <?php echo ($row['no_of_items']); ?> </td>

                    <td>
                    <?php echo ($row['bill_date']); ?> </td>

                    <td>
                    <?php echo ($row['total']); ?> </td>
                
                <td><a href="bill_edit.php?id=<?php echo $row['bill_id']; ?>">edit</a></td>
                 <td><a href="bill_delete.php?id=<?php echo $row['bill_id']; ?>">delete</a></td>

            </tr>
            <?php
       }
        ?>
    </table>

</body>

</html>
