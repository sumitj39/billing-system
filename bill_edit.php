<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bill form</title>
</head>

<body>
    <center>
       <?php
        require("db_connection.php");
        $bill_id=$_REQUEST['id'];
        //echo $id;
        $sql = "select * from bill where bill_id='$bill_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
        <form id="bill_form" action="bill_update.php" method="post"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="4" align="center"> Bill Details</td>
                </tr>
                <tr>
                    <td>bill_id</td>
                    <td><input type="text" id="bill_id" name="bill_id" 
                    value="<?php echo $row['bill_id']; ?>"
                    placeholder=" Id Number"></td>
                </tr>
                <tr>
                    <td>customer_id</td>
                    <td><input type="text" id="customer_id" name="customer_id" 
                     value="<?php echo $row['customer_id']; ?>"
                    placeholder="Customer Id Number"></td>
                </tr>
                <tr>
                    <td>admin_id</td>
                    <td><input type="text" id="admin_id" name="admin_id" 
                     value="<?php echo $row['admin_id']; ?>"
                    placeholder="admin id "></td>
                </tr>
                <tr>
                    <td>no_of_items</td>
                    <td><input type="text" id="no_of_items" name="no_of_items" 
                     value="<?php echo $row['no_of_items']; ?>"
                    placeholder="no_of_items"></td>
                </tr>
                <tr>
                    <td>bill_date</td>
                    <td><input type="text" id="bill_date" name="bill_date" 
                     value="<?php echo $row['bill_date']; ?>"
                    placeholder="Bill date "></td>
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