<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Productt form</title>
</head>

<body>
    <center>
        <form id="product_form" action="product_insert.php"  method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="3" align="center"> Product Details</td>
                </tr>
                                
                <tr>
                    <td>product_id</td>
                    <td><input type="text" id="product_id" name="product_id" placeholder=" Id Number"></td>
                </tr>
                

                <tr>
                    <td>product_name</td>
                    <td><input type="text" id="product_name" name="product_name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>product_price</td>
                    <td><input type="text" id="product_price" name="product_price" placeholder="Product price"></td>
                </tr>
                <tr>
                    <td>qty</td>
                    <td><input type="text" id="qty" name="qty" placeholder=" qty"></td>
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