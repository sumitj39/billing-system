<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>w3layouts </title>
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
			Billing Form</h1>
		<div class="appointment-w3">
			<form action="bill_add.php" method="post">
				<div class="personal">
					<h2>Personal Details</h2>
					<div class="main">
						<div class="form-left-w3l" style="width: 100%">
							<input type=text id = "phoneNumber" name = "phoneNumber" class="top-up" placeholder="Phone number" required="">
							<input type="hidden" name="totalItems" id="totalItems" value="2"/>
						</div>
					</div>
				</div>
				<div class="information" id="information">
					<h3>Bill Information</h3>
					<div class="main" id="catalogue1">
						<div class="form-left-w3l">
							<input type="text" name="itemName1" id="itemName1" placeholder="Item" required="">
						</div>
						<div class="form-right-w3ls ">
	
							<input type="number" name="itemPrice1" id="itemPrice1"placeholder="Price" required="">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="main" id="catalogue2">
						<div class="form-left-w3l">
	
							<input type="text" name="itemName2" id="itemName2"placeholder="Item" required="">
						</div>
						<div class="form-right-w3ls ">
	
							<input type="number" name="itemPrice2" id="itemPrice2" placeholder="Price" required="">
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="main">
					<div class="form-left-w3l">
						<input type="button" name="Total" id="totalButton" value="Total" onclick="getTotal()"
						style="background:#8ac9b6">
					</div>
					<div class="form-right-w3ls">
							<input type="button" id="totalValue" value="0"
							style="background:rgba(212,212,212,0.2)">
					</div>
				</div>
				<div class="main">
					<div class="form-left-w3l">
						<input type="button" value="Add" onclick="addRow()">
					</div>
					<div class="form-right-w3ls">
							<input type="button" value="Delete" onclick="deleteRow()"
							style="background:#cd0a0a">
					</div>
				</div>		
				<div class="form-control-w3l">
					<textarea name="Message" placeholder="Any Message..."></textarea>
				</div>
				<div class="btnn">
					<input type="submit" value="Submit" onclick="getTotal()">
				</div>
			</form>
		</div>
		<div class="copy">
			<p>&copy;2018 Flight Booking Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
		</div>
		<!-- js -->
		<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
		<!-- //js -->
		<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function () {
				$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
			});
			function addRow(){
				var parentdiv = document.getElementById('information')
				var childCount = parentdiv.childElementCount
				var div = document.createElement('div');
				div.className = 'main';
				div.id = 'catalogue'+String(childCount);
				div.innerHTML = '<div class="form-left-w3l"> <input type="text" name="itemName'+String(childCount)+'" id="itemName'+String(childCount)+'"placeholder="Item" required=""></div>\
						<div class="form-right-w3ls "><input type="number" name="itemPrice'+String(childCount)+'" id="itemPrice'+String(childCount)+'" placeholder="Price" required="">\
						<div class="clearfix"></div></div>';
				document.getElementById('information').appendChild(div);
				var val=document.getElementById("totalItems").value;
				document.getElementById('totalItems').value = String(Number(val)+1);
			}
			function deleteRow(){
				getTotal();
				var totalItems = Number(document.getElementById('totalItems').value);
				if(totalItems >=0){
					var ch = document.getElementById('information').lastChild;
					document.getElementById('information').removeChild(ch);
					if(totalItems > 0){
						document.getElementById('totalItems').value = String(Number(totalItems)-1);
					}
				}
			}
			function getTotal(){
				var sum=0;
				var count = document.getElementById('information').childElementCount -1;
				for(var i=1;i<=count;i++){
					var num = document.getElementById('itemPrice'+String(i)).value;
					sum += Number(num);
				}
				document.getElementById('totalValue').value=sum;
			}
		</script>
		<!-- //Calendar -->
		<!-- Time -->
		<script type="text/javascript" src="js/wickedpicker.js"></script>
		<script type="text/javascript">
			$('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
		</script>
		<!-- //Time -->
	
	</body>
	</html>