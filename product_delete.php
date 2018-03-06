<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require("db_connection.php");
    echo "hi";
    print_r($_POST);
    $product_id=$_POST['product_id'];
    echo $product_id;
    $sql = "DELETE FROM `product` where product_id='$product_id'";
    $result = mysqli_query($conn,$sql);
    if(! $result)
    {
        echo '<script type="text/javascript">
        alert("Record Not Deleted");
        window.location="products.php";
        </script>';
            
    }
    else
    {
        echo '<script type="text/javascript">
        alert("Record Deleted Successfully");
        window.location="products.php";
        </script>';
    }
}
else{
    $product_id = $_REQUEST['product_id'];
    ?>
    <html>
        <body>
            <center>
                <h3> Are you sure want to delete? </h3>
                <form method="POST" action="product_delete.php">
                    <input type='hidden' name="product_id" value="<?php echo($product_id)?>" id = "product_id"
                    />
                    <input type="submit" value="yes" name="submit"/>
                </form>
                <form method="POST" action="products.php">
                    <input type='hidden' name="product_id" value="<?php echo($product_id)?>" id = "$product_id"
                    />
                    <input type="submit" value="No" name="submit"/>
                </form>
            </center>

        </body>
    </html>
<?php
}
?>