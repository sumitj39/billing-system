<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	require "session.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Hotel Catalogue Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Catalogue Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="templates/css/font-awesome_customers.min.css" />
<!-- //font-awesome icons -->
<link rel="stylesheet" type="text/css" href="templates/css/easy-responsive-tabs_customers.css " />
<link href="templates/css/style_customers.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--extra ones -->
<link href="templates/css/style_index.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<?php require("template_menu.html"); ?>
	<div class="main">
		<h1>Inventory dashboard</h1>
		<div class="agileinfo_pricing" style="width:80%">
			<div class="agileinfo_pricing1" >
                <ul class="w3_agile_price" style="background: #9ce491;margin-bottom: 30px;">
					<li>
                        Product Name
						<span>Product ID</span>
					</li>
					<li>
                        Quantity<span>Price</span>
					</li>
				</ul>
<?php
require("db_connection.php");
$sql = 'SELECT * FROM `product`';
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_price = $row['product_price'];
    $qty = $row['qty'];
?>
				<ul class="w3_agile_price">
					<li>
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                    <?php echo(" ".$product_name); ?>
						<span>ID<?php echo(" ".$product_id); ?></span>
					</li>
					<li>
						<?php echo(" ".$qty); ?>
						<span>Price<?php echo(" ".$product_price); ?></span>
					</li>
                </ul>
<?php
}
?>
			</div>
		</div>
		
	</div>
<script src="templates/js/easyResponsiveTabs.js"></script>
</body>
</html>