<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require("db_connection.php");
    $vendor_id=$_POST['vendor_id'];
    $sql = "DELETE FROM `vendor` where vendor_id='$vendor_id'";
    $result = mysqli_query($conn,$sql);
    if(! $result)
    {
        echo '<script type="text/javascript">
        alert("Record Not Deleted");
        window.location="vendors.php";
        </script>';
            
    }
    else
    {
        echo '<script type="text/javascript">
        alert("Record Deleted Successfully");
        window.location="vendors.php";
        </script>';
    }
}
else{
    $vendor_id = $_REQUEST['vendor_id'];
    ?>
    <html>
        <body>
            <center>
                <h3> Are you sure want to delete? </h3>
                <form method="POST" action="vendor_delete.php">
                    <input type='hidden' name="vendor_id" value="<?php echo($vendor_id)?>" id = "<?php echo($vendor_id)?>"
                    />
                    <input type="submit" value="yes" name="submit"/>
                </form>
                <form method="POST" action="vendors.php">
                    <input type='hidden' name="vendor_id" value="<?php echo($vendor_id)?>" id = "<?php echo($vendor_id)?>"
                    />
                    <input type="submit" value="No" name="submit"/>
                </form>
            </center>

        </body>
    </html>
<?php
}
?>