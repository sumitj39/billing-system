<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin form</title>
</head>

<body>
    <center>
        <?php
        require("db_connection.php");
        $admin_id=$_REQUEST['id'];
        //echo $id;
        $sql = "select * from admin where admin_id='$admin_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
            <form id="admin_form" action="admin_update.php" method="post" enctype="multipart/form_data">
                <table>
                    <tr>
                        <td colspan="3" align="center">Admin Details</td>
                    </tr>
                    <tr>
                        <td>admin_id</td>
                        <td><input type="text" id="admin_id" name="admin_id" value="<?php echo $row['admin_id']; ?>" placeholder="  Id number"></td>
                    </tr>
                    <tr>
                        <td>admin_name</td>
                        <td><input type="text" id="admin_name" name="admin_name" value="<?php echo $row['admin_name']; ?>" placeholder=" name"></td>
                    </tr>
                    <tr>
                        <td>admin_password</td>
                        <td><input type="text" id="admin_password" name="admin_password" value="<?php echo $row['admin_password']; ?>" placeholder=" Password"></td>
                    </tr>
                    <tr>
                        <td>admin_email</td>
                        <td><input type="text" id="admin_email" name="admin_email" value="<?php echo $row['admin_email']; ?>" placeholder=" Email-Id"></td>
                    </tr>
        
                    <tr>
                        <td align="center"><input type="submit" id="submit" name="submit" value="submit"></td>


                        <td align="center"><input type="reset" id="reset" name="reset" value="reset"></td>
                    </tr>

                </table>
            </form>
    </center>

</body>

</html>