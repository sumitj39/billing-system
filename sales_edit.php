<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>sales form</title>
</head>

<body>
    <center>
       <?php
        require("db_connection.php");
        $sales_id=$_REQUEST['id'];
        //echo $id;
        $sql = "select * from sales where sales_id='$sales_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
        <form id="sales_form" action="sales_update.php"  method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="5" align="center">sales Details</td>
                </tr>
                                
                <tr>
                    <td>sales_id</td>
                    <td><input type="text" id="sales_id" name="sales_id" 
                    value="<?php echo $row['sales_id']; ?>"
                    placeholder=" Id Number"></td>
                </tr>
                

                <tr>
                    <td>product_id</td>
                    <td><input type="text" id="product_id" name="product_id" 
                    value="<?php echo $row['product_id']; ?>"
                    placeholder="id"></td>
                </tr>
                <tr>
                    <td>customer_id</td>
                    <td><input type="text" id="customer_id" name="customer_id"
                    value="<?php echo $row['customer_id']; ?>"    placeholder="customer_id">
                    </td>
                 </tr>   

                <tr>
                    <td>sales_price</td>
                    <td><input type="text" id="sales_price" name="sales_price" 
                    value="<?php echo $row['sales_price']; ?>"
                    placeholder="sales_price"></td>
               
                </tr>
                <tr>
                    <td>sales_qty</td>
                    <td><input type="text" id="sales_qty" name="sales_qty" 
                    value="<?php echo $row['sales_qty']; ?>"
                    placeholder="sales_qty"></td>
                </tr>
                <tr>
                    <td>sales_date</td>
                    <td><input type="sales_date" id="sales_date" name="sales_date" 
                    value="<?php echo $row['sales_date']; ?>"
                    placeholder="sales_date"></td>
                </tr>
               
               <tr>
                    <td>bill_id</td>
                    <td><input type="bill_id" id="bill_id" name="bill_id" 
                    value="<?php echo $row['bill_id']; ?>"
                    placeholder="bill_id"></td>
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