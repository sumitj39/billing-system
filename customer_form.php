<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>customer form</title>
</head>

<body>
    <center>
        <form id="customer_form" action="customer_insert.php"  method="post">
            <table border="1">
                <tr>
                    <td colspan="4" align="center">Customer_Details</td>
                </tr>
                <tr>
                    <td>customer_id</td>
                    <td><input type="text" id="customer_id" name="customer_id" ></td>
                </tr>
                <tr>
                    <td>customer_name</td>
                    <td><input type="text" id="customer_name" name="customer_name" ></td>
               </tr>
                
                <tr>
                    <td>customer_contactno</td>
                     <td><input type="text" id="customer_contactno" name="customer_contactno" ></td>
               </tr>
               <tr>
                    <td>customer_address</td>
                    <td><input type="text" id="customer_address" name="customer_address" ></td>
                </tr>
               
                <tr>
                    <td>customer_balance</td>
                    <td><input type="text" id="customer_balance" name="customer_balance" ></td>
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
