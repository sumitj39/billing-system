<html>
<head>

<!-- //font-awesome icons -->
<link rel="stylesheet" type="text/css" href="templates/css/easy-responsive-tabs_customers.css " />
<link href="templates/css/style_customers.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--extra ones -->
<link href="templates/css/style_index.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
    <?php require("template_menu.html"); ?>
    <div class="main">
        <h1>Products dashboard</h1>
        <div class="agileinfo_pricing" style="width:80%">
            <div class="agileinfo_pricing1">
                <h3><a href="product_form.php">Add Product </a></h3>
                <h3>Information</h3>
                <?php
require ("db_connection.php");

$sql = "SELECT * FROM `product`";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
                <ul class="w3_agile_price">
                    <li style="font-size:25px;">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <?php echo ($row['product_name']); ?>
                        <span><?php echo ($row['product_id']); ?></span>
                    </li>
                    <li style="font-size:25px;">
                        $<?php echo ($row['product_price']); ?>
                        <span><?php echo ($row['qty']); ?></span>
                        
                    </li>
                    <li>
						<a href='product_edit.php?product_id=<?php echo($row['product_id'])?>' style="padding: 4px 10px;background: blueviolet;">edit</a>
                        <a href='product_delete.php?product_id=<?php echo($row['product_id'])?>' style="padding: 4px 10px;">delete</a>
                    </li>
                </ul>
                <?php
                    }
                ?>
            </div>
        </div>
        
    </div>
<script src="js/easyResponsiveTabs.js"></script>
<script src="templates/js/easyResponsiveTabs.js"></script>
</body>
</html>
