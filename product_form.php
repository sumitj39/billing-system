<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<?php
//product_name product_price qty
?>
<head>
	<title>CEW Shop </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="templates/css/style_index.css" rel="stylesheet" type="text/css" media="all" />

	<link href="templates/css/custadd_style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="templates/css/custadd_jquery-ui.css" />
	<!-- //Calendar -->
	<link href="templates/css/custadd_wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<!-- Time-script-CSS -->

	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
	<?php require("template_menu.html"); ?>
	<h1 class="header-w3ls">
		Add Product Form</h1>
	<div class="appointment-w3">
		<form action="product_add.php" method="post">
			<div class="personal">
				<h2>Product Details</h2>
				<div class="main">
					<div class="form-left-w3l">

						<input type="text" class="top-up" id="product_name" name="product_name" placeholder="Product Name" required="">
					</div>
					<div class="form-right-w3ls ">

						<input type="number" class="top-up" name="product_price" id= "product_price" placeholder="Product Price" required="">
						<div class="clearfix"></div>
					</div>

				</div>
				<div class="main">
					<div class="form-left-w3l">
						<input type="number" class="top-up" id="qty" name="qty" placeholder="Quantity" required="" style="width:100%;">
                        <div class="clearfix"></div>
                    </div>
				</div>
			</div>	
			<div class="btnn">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
</body>

</html>