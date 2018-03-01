<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td><a href="admin_form.php">ADD</a></td>
            <td colspan="5" align="center"> Admin details</td>
        </tr>
        <tr>
            <td><b>admin_id</b></td>
            <td><b>admin_name</b></td>
            <td><b>admin_password</b></td>
            <td><b>admin_email</b></td>
            <td><b>update</b></td>
            <td><b>delete</b></td>
        </tr>
        <?php
       require("db_connection.php");
       
       $sql = 'SELECT * FROM `admin`';
       
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
        ?>
            <tr>
                <td>
                    <?php echo ($row['admin_id']); ?> </td>
                <td>
                    <?php echo ($row['admin_name']); ?> </td>
               
                <td>
                    <?php echo ($row['admin_password']); ?> </td>
            
                <td>
                    <?php echo ($row['admin_email']); ?> </td>
                
                <td><a href="admin_edit.php?id=<?php echo $row['admin_id']; ?>">edit</a></td>
                 <td><a href="admin_delete.php?id=<?php echo $row['admin_id']; ?>">delete</a></td>

            </tr>
            <?php
       }
        ?>
    </table>

</body>

</html>
