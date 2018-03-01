<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>

<body>
    <center>
        <form id="sales_form" action="sales_insert.php"  method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="6" align="center">sales Details</td>
                </tr>
                                
                <tr>
                    <td>sales_id</td>
                    <td><input type="text" id="sales_id" name="sales_id" placeholder=" Id Number"></td>
                </tr>
                

                <tr>
                    <td>product_id</td>
                    <td><input type="text" id="product_id" name="product_id" placeholder="Id"></td>
                </tr>
                <tr>
                    <td>customer_id</td>
                    <td><input type="text" id="customer_id" name="customer_id" placeholder="customer_id"></td>
                </tr>
                <tr>
                    <td>sales_price</td>
                    <td><input type="text" id="sales_price" name="sales_price" placeholder="sales_price"></td>
                </tr>
                 <tr>
                    <td>sales_qty</td>
                    <td><input type="text" id="sales_qty" name="sales_qty" placeholder="sales_qty"></td>
                </tr>
                 <tr>
                    <td>sales_date</td>
                    <td><input type="text" id="sales_date" name="sales_date" placeholder="sales_date"></td>
                </tr>
                <tr>
                    <td>bill_id</td>
                    <td><input type="text" id="bill_id" name="bill_id" placeholder="bill_id"></td>
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