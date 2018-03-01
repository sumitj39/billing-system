<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bill form</title>
</head>

<body>
    <center>
        <form id="bill_form" action="bill_insert.php" method="post"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2" align="center"> Bill Details</td>
                </tr>
                <tr>
                    <td>bill_id</td>
                    <td><input type="text" id="bill_id" name="bill_id" placeholder=" Id Number"></td>
                </tr>
                <tr>
                    <td>customer_id</td>
                    <td><input type="text" id="customer_id" name="customer_id" placeholder="Customer Id Number"></td>
                </tr>
                <tr>
                    <td>admin_id</td>
                    <td><input type="text" id="admin_id" name="admin_id" placeholder="admin_id" ></td>
                </tr>
                <tr>
                    <td>no_of_items</td>
                    <td><input type="text" name="no_of_items" placeholder="no_of_items"></td>
                </tr>
                <tr>
                    <td>bill_date</td>
                    <td><input type="text" id="bill_date" name="bill_date" placeholder="Bill date "></td>
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