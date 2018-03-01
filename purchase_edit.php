<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Purchase form</title>
</head>

<body>
    <center>
       <?php
        require("db_connection.php");
        $purchase_id=$_REQUEST['id'];
        //echo $id;
        $sql = "select * from purchase where purchase_id='$purchase_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
        <form id="purchase_form" action="purchase_update.php"  method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="5" align="center"> Purchase Details</td>
                </tr>
                                
                <tr>
                    <td>purchase_id</td>
                    <td><input type="text" id="purchase_id" name="purchase_id" 
                    value="<?php echo $row['purchase_id']; ?>"
                    placeholder=" Id Number"></td>
                </tr>
                

                <tr>
                    <td>product_id</td>
                    <td><input type="text" id="product_id" name="product_id" 
                    value="<?php echo $row['product_id']; ?>"
                    placeholder="id"></td>
                </tr>
                <tr>
                    <td>vendor_id</td>
                    <td><input type="text" id="vendor_id" name="vendor_id"
                    value="<?php echo $row['vendor_id']; ?>"    placeholder="vendor_id"></td>

                    
                </tr>
                <tr>
                    <td>purchase_qty</td>
                    <td><input type="text" id="purchase_qty" name="purchase_qty" 
                    value="<?php echo $row['purchase_qty']; ?>"
                    placeholder="purchase_qty"></td>
                </tr>
                <tr>
                    <td>purchase_date</td>
                    <td><input type="purchase_date" id="purchase_date" name="purchase_date" 
                    value="<?php echo $row['purchase_date']; ?>"
                    placeholder="purchase_date"></td>
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