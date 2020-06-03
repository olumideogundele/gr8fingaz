<?php
session_start();
include ("restricted/config/DB_config.php"); 
 
include("restricted/web-include/class_file.php");
 
 include("restricted/web-include/SendingSMS.php");
 include("restricted/web-include/view-application-details-home.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title><?php
		
		echo $inst_name." :::: ".$inst_slogan;
		
		?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo "restricted/".$inst_logo; ?>" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo "restricted/".$inst_logo; ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo "restricted/".$inst_logo; ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo "restricted/".$inst_logo; ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo "restricted/".$inst_logo; ?>">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
	<link href="backend/css/vendors.css" rel="stylesheet">
	<link href="backend/css/vendors.css" rel="stylesheet">	
    <!-- YOUR CUSTOM CSS -->
	
	<link href="backend/css/tables.css" rel="stylesheet">
    <link href="backend/css/custom.css" rel="stylesheet">

</head>

<body>
		
	<div id="page">
		
		<header class="header_in is_sticky menu_fixed">
		<div id="logo">
			<a href="index.php" title="<?php echo $inst_name; ?>">
			<!--	<img src="<?php //echo "restricted/".$inst_logo; ?>" width="165" height="35" alt="" class="logo_normal">-->
				<img src="<?php echo "restricted/".$inst_logo; ?>" width="165" height="35" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="account.php" class="btn_add">Sign Up</a></li>
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
			<li><a href="backend/wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index.php">Home</a></span>
					 
				</li>
					<li><span><a href="#">About Us</a></span>
					 
				</li>
				<li><span><a href="#">Categories</a></span>
					<ul>
						<?php
							
							include("restricted/web-include/view-categories-menu.php");
							?>
						 
					
						
					</ul>
				</li>
			
				<li><span><a href="#0">How It Works</a></span>
					 
				</li>
				<li><span><a href="#0">Contact Us</a></span></li>
			</ul>
		</nav>
	</header>
	<!-- /header -->