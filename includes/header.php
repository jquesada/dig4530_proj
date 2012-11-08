<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			@import url("css/reset.css");
			@import url("css/text.css");
			@import url("css/960.css");
			@import url("css/styles.css");
		</style>
		<!--BEGIN JQUERY SLIDER-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/slides.min.jquery.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#slides').slides({
					preload: true,
					play: 5000,
					pause: 1000,
					hoverPause: true
				});
			});
		</script>
<!--END JQUERY SLIDER-->

		<title>OOJO <?= $title ?></title>
	</head>
	<body>
<!--BEGIN HEADER-->
		<div id="account_container">
			<div class="container_12">
				<div class="grid_12" id="account_nav">
					<div id="log_in">
						<ul>
							<li><a href="cart.php">My Cart</a></li>
							<?php 

							if($_SESSION['loggedIn']){
								print "<li><a href='client.php'>My Account</a></li>";
								print "<li><a href='scripts/logout.php'>Log Out</a></li>";

								if($_SESSION['userPermissions'] == 1 || $_SESSION['userPermissions'] == 2){
									print "<li><a href='admin.php'>Admin</a></li>";
								}
							}
							else{
								print "<li><a href='login.php'>Log In</a></li>";
								print "<li><a href='register.php'>Register</a></li>";
							}
							
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
			<div id="header_container">
				<div class="container_12">
					<div class="grid_12" id="header">
						<div id="logo">
							<h1><a href="home.php"> </a></h1>
						</div>
						<div id="main_nav">
							<ul>
								<li><a href="home.php">home</a></li>
								<li><a href="catalog.php">catalog</a></li>
								<li><a class="last_link" href="about.php">about</a></li>
							</ul>
						</div>
						<div id="search">
							<form action="scripts/search.php" method="get" name="search_form" id="search_form">
								<input type="text" name="search" placeholder="Search" />
								<input type="submit" class="submit" id="submit" value="" />
							</form>
						</div>
					</div>
				</div>
			</div>
<!--END HEADER-->