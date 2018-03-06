<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo("HELLO");
        require('db_connection.php');
        $vendor_id = $_POST['vendor_id'];
        $vendor_fullname=$_POST['vendor_fullname'];
        $vendor_company=$_POST['vendor_company'];
        $vendor_address=$_POST['vendor_address'];
        $vendor_email=$_POST['vendor_email'];
        $vendor_contactno=$_POST['vendor_contactno'];
        //EDITING THE EXISTING USER.
        $vendor_update_query = "UPDATE `vendor` SET `vendor_fullname`='$vendor_fullname' ,`vendor_company`='$vendor_company',`vendor_address`='$vendor_address',`vendor_email`='$vendor_email',`vendor_contactno`='$vendor_contactno' where `vendor_id`='$vendor_id'";
        echo($vendor_update_query);
        $result = mysqli_query($conn,$vendor_update_query);
        if(!$result){
            $_SESSION['error_message'] = "Could not update vendor information. <a href='vendors.php'> Try again</a>";
            header('Location: error.php');
            die();
        }
        else{
            header('Location: vendors.php');
            die();
        }
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">

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
    <?php
        require("db_connection.php");
        $vendor_id=$_REQUEST['vendor_id'];
        echo($vendor_id);
        //echo $id;
        $sql = "select * from vendor where vendor_id='$vendor_id'";
        $result = mysqli_query($conn,$sql);
        //$count=1;
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(!$row){
            $_SESSION['error_message'] = "Could not find an entry with vendor_id=$vendor_id<a href='index.php'>Home</a>";
            header('Location:error.php');
        }
    ?>
	<h1 class="header-w3ls">
		Vendor Edit Form</h1>
	<div class="appointment-w3">
		<form action="vendor_edit.php" method="post">
			<div class="personal">
				<h2>Personal Details</h2>
				<div class="main">
					<div class="form-left-w3l">
                        <input type='hidden' name="vendor_id" value="<?php echo($vendor_id);?>" id="vendor_id"/>
                        <input type="text" class="top-up" id="vendor_fullname" name="vendor_fullname"
                        value="<?php echo $row['vendor_fullname']; ?>"
                         placeholder="Full Name" required="">
					</div>
					<div class="form-right-w3ls ">

                        <input type="text" class="top-up" name="vendor_company" id= "vendor_company" 
                        value="<?php echo $row['vendor_company']; ?>"
                        placeholder="Compnay" required="">
						<div class="clearfix"></div>
					</div>

				</div>
				<div class="main">
					<div class="form-left-w3l">

                        <input type="text" class="top-up" id="vendor_email" name="vendor_email" 
                        value="<?php echo $row['vendor_email']; ?>"
                        placeholder="E-Mail" required="">
					</div>
					<div class="form-right-w3ls ">

                        <input type="text" class="top-up" name="vendor_contactno" id= "vendor_contactno" 
                        value="<?php echo $row['vendor_contactno']; ?>"
                        placeholder="Phone Number" required="">
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="main">
					<div class="form-control-w3l" style="width:100%">
                        <textarea name="vendor_address" placeholder="Address" 
                        value="<?php echo $row['vendor_address']; ?>"
                        required><?php echo $row['vendor_address']; ?></textarea>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>	
			<div class="btnn">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
	
	<!-- js -->

</body>

</html>
<?php 
}
?>