<?php 
	session_start();
	include_once('class/crud.php');
	$mysqli=new crud();
	$baseurl="http://localhost/sports_store/";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">
	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />
	<!-- Bootstrap CSS -->
	<link href="<?= $baseurl ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="<?= $baseurl ?>css/tiny-slider.css" rel="stylesheet">
	<link href="<?= $baseurl ?>css/style.css" rel="stylesheet">
	<title>Sports Store</title>
</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="<?=  $baseurl ?>index.php">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link" href="<?= $baseurl ?>index.php">Home</a>
						</li>
						<li><a class="nav-link" href="<?= $baseurl ?>shop.php">Shop</a></li>
						<li><a class="nav-link" href="<?= $baseurl ?>about.php">About us</a></li>
						<li><a class="nav-link" href="<?= $baseurl ?>services.php">Services</a></li>
						<li><a class="nav-link" href="<?= $baseurl ?>blog.php">Blog</a></li>
						<li><a class="nav-link" href="<?= $baseurl ?>contact.php">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="javascript:void(0)"><img src="<?= $baseurl ?>images/user.svg"></a></li>
						<li><a class="nav-link" href="<?=  $baseurl ?>cart.php"><img src="<?= $baseurl ?>images/cart.svg"><span class="badge cart_total" > <?= isset($_SESSION['cart']['total_qty'])?$_SESSION['cart']['total_qty']:0 ?> </span></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->