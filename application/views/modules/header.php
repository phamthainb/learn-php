<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
		<title>home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.timepicker.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
				<div class="container">
						<a class="navbar-brand" href="/learn-php/index.php/home_controller">Modist</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="oi oi-menu"></span> Menu
						</button>
						<div class="collapse navbar-collapse" id="ftco-nav">
								<ul class="navbar-nav ml-auto">
										<li class="nav-item active"><a href="/learn-php/index.php/home_controller" class="nav-link">Home</a></li>
										<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="/learn-php/index.php/shop_controller" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
												<div class="dropdown-menu" aria-labelledby="dropdown04">
														<a class="dropdown-item" href="/learn-php/index.php/shop_controller/router/shop">Shop</a>
														<a class="dropdown-item" href="/learn-php/index.php/shop_controller/router/product-single">Single Product</a>
														<a class="dropdown-item" href="/learn-php/index.php/shop_controller/router/cart">Cart</a>
														<a class="dropdown-item" href="/learn-php/index.php/shop_controller/router/checkout">Checkout</a>
												</div>
										</li>
										<li class="nav-item"><a href="/learn-php/index.php/about_controller" class="nav-link">About</a></li>
										<li class="nav-item"><a href="/learn-php/index.php/blog_controller" class="nav-link">Blog</a></li>
										<li class="nav-item"><a href="/learn-php/index.php/contact_controller" class="nav-link">Contact</a></li>
										<li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
								</ul>
						</div>
				</div>
		</nav>
		<!-- END nav -->
