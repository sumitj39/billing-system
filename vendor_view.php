<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td><a href="vendor_form.php">ADD</a></td>
            <td colspan="7" align="center"> vendor details</td>
        </tr>
        <tr>
            <td><b>vendor_id</b></td>
            <td><b>vendor_fullname</b></td>
            <td><b>vendor_company</b></td>
            <td><b>vendor_address</b></td>
            <td><b>vendor_email</b></td>
             <td><b>vendor_contactno</b></td>
            <td><b>update</b></td>
            <td><b>delete</b></td>
        </tr>
        <?php
       require("db_connection.php");
       
       $sql = 'SELECT * FROM `vendor`';
       
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
        ?>
            <tr>
                <td>
                    <?php echo ($row['vendor_id']); ?> </td>
                <td>
                    <?php echo ($row['vendor_fullname']); ?> </td>
               
                <td>
                    <?php echo ($row['vendor_company']); ?> </td>
            
                <td>
                    <?php echo ($row['vendor_address']); ?> </td>
                <td>
                    <?php echo ($row['vendor_email']); ?> </td>
                 <td>
                    <?php echo ($row['vendor_contactno']); ?> </td>
   
               
                <td><a href="vendor_edit.php?id=<?php echo $row['vendor_id']; ?>">edit</a></td>
                 <td><a href="vendor_delete.php?id=<?php echo $row['vendor_id']; ?>">delete</a></td>

            </tr>
            <?php
            
       }
        ?>
    </table>

</body>

</html>
