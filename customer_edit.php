<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>customer form</title>
</head>

<body>
    <center>
       <?php
        require("db_connection.php");
        $customer_id=$_REQUEST['id'];
        //echo $id;
        $sql = "select * from customer where customer_id='$customer_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
        <form id="customer_form" action="customer_update.php"  method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="4" align="center"> customer Details</td>
                </tr>
                                
                                

                <tr>
                    <td>customer_id</td>
                    <td><input type="text" id="customer_id" name="customer_id" 
                    value="<?php echo $row['customer_id']; ?>"
                    placeholder="id"></td>
                </tr>
                <tr>
                    <td>customer_name</td>
                    <td><input type="text" id="customer_name" name="customer_name"
                    value="<?php echo $row['customer_name']; ?>"
                    placeholder="customer_name"></td>
                </tr>

                <tr>
                    <td>customer_contactno</td>
                    <td><input type="text" id="customer_contactno" name="customer_contactno" 
                    value="<?php echo $row['customer_contactno']; ?>"
                    placeholder="customer_contactno"></td>
                </tr>
                <tr>
                    <td>customer_address</td>
                    <td><input type="text" id="customer_address" name="customer_address" 
                    value="<?php echo $row['customer_address']; ?>"
                    placeholder="customer_address"></td>
                </tr>

                <tr>
                    <td>customer_balance</td>
                    <td><input type="text" id="customer_balance" name="customer_balance" 
                    value="<?php echo $row['customer_balance']; ?>"
                    placeholder="customer_balance"></td>
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