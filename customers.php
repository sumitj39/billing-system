`<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>CHIDAMBAR ELECTRICAL WORKS HANGAL :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Catalogue Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="templates/js/jquery-1.11.3.min.js"></script>
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
        <h1>Customers dashboard</h1>
        <div class="agileinfo_pricing" style="width:80%">
            <div class="agileinfo_pricing1">
                <h3><a href="customers_add.php">Add Customer </a></h3>
                <h3>Information</h3>
                <?php
require ("db_connection.php");

$sql = "SELECT * FROM customer";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
                <ul class="w3_agile_price">
                    <li>
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <?php echo ($row['customer_name']); ?>
                        <span><?php echo ($row['customer_address']); ?></span>
                    </li>
                    <li>
                        <?php echo ($row['customer_contactno']); ?>
                        <span><?php echo ($row['customer_balance']); ?></span>
                    </li>
                </ul>
                <?php
}
?>
            </div>
        </div>
        <div class="agileits_copyright">
            <p>© 2017 Hotel Catalogue Widget. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
<script src="js/easyResponsiveTabs.js"></script>
<script src="templates/js/easyResponsiveTabs.js"></script>
</body>
</html>