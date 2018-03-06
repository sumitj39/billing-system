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
		<h1>Sales dashboard</h1>
		<div class="agileinfo_pricing" style="width:80%">
			<div class="agileinfo_pricing1">
			<h3><a href="bill.php">Add New Bill</a></h3>
                <h3>Information</h3>
<?php
require("db_connection.php");
$sql = 'SELECT * FROM `bill`';
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$fetch_name_query = "select `customer_name` from `customer` where `customer_id`={$row['customer_id']}";
$cust_nameobj = mysqli_query($conn,$fetch_name_query);
$cust_nameobj = mysqli_fetch_array($cust_nameobj,MYSQLI_BOTH);
$cust_name = $cust_nameobj["customer_name"];
?>

				<!--ul><a><span>edit</span></a></ul-->
				<ul class="w3_agile_price">
					<li>
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
						<?php echo " ".($cust_name); ?>
						<span>Date<?php echo " ".($row['bill_date']); ?></span>
					</li>
					<li>
                        Total Amt
						<?php echo " ".($row['total']); ?>
						<span>bill_id<?php echo " ".($row['bill_id']); ?></span>
					</li>
					<li>
						<a href='#' style="padding: 4px 10px;background: blueviolet;">edit</a>
						<a href='#' style="padding: 4px 10px;">delete</a>
					</li>
				</ul>
<?php
}
?>
			</div>
		</div>
		
	</div>
<script src="js/easyResponsiveTabs.js"></script>
</body>
</html>