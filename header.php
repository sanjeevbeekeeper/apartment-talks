<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow" />
	<title>Apartment talks</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style>
		/* 13 Jun 2024, 9:32 AM */
		/* When printing, the content will fill the screen */
	    @media print {
	        body {
	            zoom: 200%;
	        }
	    }
	</style>
</head>
<!-- 
# 17 Jun 2024, 2:41 PM
# the 'onFunction()' and 'offFunction()' function is for javascript to checck whether the internet is online or offline
# The message will display in the customize page.
 -->
<body class="bg-light" ononline="onFunction()" onoffline="offFunction()">
	<?php 
	# 
	# Beekeeper design studio - 20 Jun 2024, 9:22 AM
	# Turn off if not needed
	include 'template-parts/header/grid-guide.php';
	# 
	# Beekeeper design studio - 20 Jun 2024, 9:22 AM
	# Full width nav
	include 'template-parts/header/nav.php';
	?>

	<!-- 
	# beekeeper Design Studio, 19 jun 2024, 2:22 PM
	# This is to display online and offine script. see the footer
	<p style="z-index:100;" class="p-1 px-2 small text-white position-fixed" id="demo"></p> -->

	<div class="container mt-4 mb-5">
		<?php
		# 
		# Beekeeper Design Studio - 10 Jun 2024, 9:23 AM
		# Get the current page URL
		$get_current_url = pathinfo( $_SERVER['PHP_SELF'], PATHINFO_FILENAME);
		
		# 
		# Beekeeper Design Studio - 10 Jun 2024, 9:23 AM
		# Functions hold the title for all the pages
		include 'functions.php';
		
		# 
		# Beekeeper Design Studio - 10 6 2024, 4:00 PM
		# for layout.php, customize.php
		include 'template-parts/header/query-string.php';
		?>
		
	
