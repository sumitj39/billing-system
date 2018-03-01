<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product form</title>
</head>

<body>
    <center>
       <?php
        require("db_connection.php");
        $product_id=$_REQUEST['id'];
        //echo $id;
        $sql = "select * from product where product_id='$product_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
        <form id="product_form" action="product_update.php"  method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="3" align="center"> Product Details</td>
                </tr>
                                
                                

                <tr>
                    <td>product_id</td>
                    <td><input type="text" id="product_id" name="product_id" 
                    value="<?php echo $row['product_id']; ?>"
                    placeholder="id"></td>
                </tr>
                <tr>
                    <td>product_name</td>
                    <td><input type="text" id="product_name" name="product_name"
                    value="<?php echo $row['product_name']; ?>"    placeholder="product_name"></td>
                </tr>

                <tr>
                    <td>product_price</td>
                    <td><input type="product_price" id="product_price" name="product_price" 
                    value="<?php echo $row['product_price']; ?>"
                    placeholder="product_price"></td>
                </tr>
                <tr>
                    <td>qty</td>
                    <td><input type="text" id="qty" name="qty" 
                    value="<?php echo $row['qty']; ?>"
                    placeholder="qty"></td>
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