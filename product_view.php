<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
       <tr> <td><a href="product_form.php">ADD</a></td>
      <td colspan="6" align="center"> product details</td></tr>
       
        <tr>
            <td><b>product_id</b></td>
            <td><b>product_name</b></td>
            <td><b>product_price</b></td>
            <td><b>qty</b></td>
            <td><b>edit</b></td>
            <td><b>delete</b></td>
        </tr>
        <?php
       require("db_connection.php");
       
       $sql = 'SELECT * FROM `product`';
       
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
        ?>
          <tr>
              <td><?php echo ($row['product_id']); ?> </td>
              <td><?php echo ($row['product_name']); ?> </td>
              <td><?php echo ($row['product_price']); ?> </td>
              <td><?php echo ($row['qty']); ?> </td>
              <td><a href="product_edit.php?id=<?php echo $row['product_id']; ?>">edit</a></td>
              <td><a href="product_delete.php?id=<?php echo $row['product_id']; ?>">delete</a></td>
            
        </tr>
        <?php
       }
        ?>
    </table>
</body>

</html>