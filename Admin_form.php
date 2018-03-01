<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin form</title>
</head>

<body>
    <center>
        <form id="Admin_form" action="Admin_insert.php"  method="post"enctype="multipart/form_data">
            <table>
                <tr>
                    <td colspan="9" align="center">Admin Details</td>
                </tr>
                <tr>
                    <td>admin_id</td>
                    <td><input type="text" id="admin_id" name="admin_id" placeholder="admin_id"></td>
                </tr>
                <tr>
                    <td>admin_name</td>
                    <td><input type="text" id="admin_name" name="admin_name" placeholder="admin_name"></td>
                </tr>
               
                <tr>
                    <td>admin_password</td>
                    <td><input type="text" id="admin_password" name="admin_password" placeholder=" Password"></td>
                </tr>
                <tr>
                    <td>admin_email</td>
                    <td><input type="text" id="admin_email" name="admin_email" placeholder=" Email-Id"></td>
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