<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <center>
        <form id="vendor_form" action="vendor_insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="7" align="center">vendor Details</td>
                </tr>
                <tr>
                    <td>vendor_id</td>
                    <td><input type="text" id="vendor_id" name="vendor_id" placeholder="  Id number"></td>
                </tr>
                <tr>
                    <td>vendor_fullname</td>
                    <td><input type="text" id="vendor_fullname" name="vendor_fullname" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>vendor_company</td>
                    <td><input type="text" id="vendor_company" name="vendor_company" placeholder="company"></td>
                </tr>
                <tr>
                    <td>vendor_address</td>
                    <td><input type="text" id="vendor_address" name="vendor_address" placeholder="address"></td>
                </tr>

                <tr>
                    <td>vendor_email</td>
                    <td><input type="text" id="vendor_email" name="vendor_email" placeholder="email"></td>
                </tr>
                <tr>
                <td>vendor_contactno</td>
                    <td><input type="text" id="vendor_contactno" name="vendor_contactno" placeholder="  Contact number"></td>
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