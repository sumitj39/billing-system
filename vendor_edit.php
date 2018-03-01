<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vendor form</title>
</head>

<body>
    <center>
       <?php
        require("db_connection.php");
        $vendor_id=$_REQUEST['id'];
        //echo $id;
        $sql = "select * from vendor where vendor_id='$vendor_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
        <form id="vendor_form" action="vendor_update.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="7" align="center">vendor Details</td>
                </tr>
                <tr>
                    <td>vendor_id</td>
                    <td><input type="text" id="vendor_id" name="vendor_id" 
                    value="<?php echo $row['vendor_id']; ?>"
                    placeholder="  Id number"></td>
                </tr>
                <tr>
                    <td>vendor_fullname</td>
                    <td><input type="text" id="vendor_fullname" name="vendor_fullname"
                    value="<?php echo $row['vendor_fullname']; ?>"
                      placeholder="fullname"></td>
                </tr>
                <tr>
                    <td>vendor_company</td>
                    <td><input type="text" id="vendor_company" name="vendor_company" 
                    value="<?php echo $row['vendor_company']; ?>"
                    placeholder="Company"></td>
                </tr>
                <tr>
                    <td>vendor_address</td>
                    <td><input type="text" id="vendor_address" name="vendor_address" 
                    value="<?php echo $row['vendor_address']; ?>"
                    placeholder="  Address"></td>
                </tr>
                <tr>
                    <td>vendor_email</td>
                    <td><input type="text" id="vendor_email" name="vendor_email" 
                    value="<?php echo $row['vendor_email']; ?>"
                    placeholder="Email"></td>
                </tr>
                <tr>
                    <td>vendor_contactno</td>
                    <td><input type="text" id="vendor_contactno" name="vendor_contactno"
                    value="<?php echo $row['vendor_contactno']; ?>"
                      placeholder="contact number"></td>
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