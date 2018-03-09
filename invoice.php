<?php
require("session.php");
	$bill_id = $_REQUEST['bill_id'];
?>
<?php
if(1){
	if(!$bill_id){
		echo '<script type="text/javascript">
    	alert(" No bill id specified");
    	window.location="index.php";
    	</script>';
	}
	require("db_connection.php");
	$sql = "SELECT * FROM `bill` where `bill_id`='$bill_id'";
	$result = mysqli_query($conn, $sql);
	$bill = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if(!$bill){
		echo '<script type="text/javascript">
    	alert(" No bill found for specified billid");
    	window.location="sales.php";
    	</script>';
	}

	$customer_id = $bill['customer_id'];
	$sql = "SELECT * FROM `customer` where `customer_id`='$customer_id'";
	$result = mysqli_query($conn, $sql);
	$customer = mysqli_fetch_array($result,MYSQLI_ASSOC);

	if(!$customer){
		echo '<script type="text/javascript">
    	alert(" Customer not found");
    	window.location="sales.php";
    	</script>';
	}

	$admin_id = $bill['admin_id'];
	$sql = "SELECT * FROM `admin` where `admin_id`='$admin_id'";
	$result = mysqli_query($conn, $sql);
	$admin = mysqli_fetch_array($result,MYSQLI_ASSOC);

	if(!$admin){
		echo '<script type="text/javascript">
    	alert(" Admin not found");
    	window.location="sales.php";
    	</script>';
	}

	$total_items = (int)$bill['no_of_items'];
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address contenteditable>
				<p>
					<?php echo $admin['admin_name']?><br>
					<?php echo $admin['admin_email']?>
				</p>
			</address>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p><?php echo $customer['customer_name'] ?></p>
				<p><?php echo $customer['customer_address'] ?></p>
				<p><?php echo $customer['customer_contactno']?></p>			
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable><?php echo $bill_id?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable><?php echo $bill['bill_date'] ?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due</span></th>
					<td><span id="prefix" contenteditable>$</span>	
					<span><?php echo $customer['customer_balance']?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Item</span></th>
						<th><span contenteditable>Rate</span></th>
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
				<?php
					$sql = "SELECT * FROM `sales` where `bill_id`='$bill_id'";
					$result = mysqli_query($conn, $sql);
					while($sale = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						$product_id=$sale['product_id'];
						$prodresult=mysqli_query($conn, "SELECT * from `product` where `product_id`='$product_id'");
						$product = mysqli_fetch_array($prodresult, MYSQLI_ASSOC);
						if(! $product){
							echo '<script type="text/javascript">
							alert(" product not found");
							window.location="sales.php";
							</script>';
						}
				?>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable><?php echo $product['product_name']?></span></td>
						<td><span data-prefix>$</span><span contenteditable><?php echo $sale['sales_price']?></span></td>
						<td><span contenteditable><?php echo $sale['sales_qty']; ?></span></td>
						<td><span data-prefix>$</span><span><?PHP echo (int)$sale['sales_qty']*(int)$sale['sales_price']; ?></span></td>
					</tr>
				</tbody>
					<?php } ?>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span><?php echo$bill['total'] ?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>GST</span></th>
					<td><span contenteditable>18</span><span data-prefix>%</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Sum</span></th>
					<td><span data-prefix>$</span><span><?php echo $bill['total']+(int)$bill['total']*0.18; ?></span></td>
				</tr>
			</table>
		</article>
	</body>
</html>