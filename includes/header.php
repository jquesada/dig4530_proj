<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			@import url("css/reset.css");
			@import url("css/text.css");
			@import url("css/960.css");
			@import url("css/styles.css");
		</style>
		<title>OOJO <?= $title ?></title>
	</head>
	<body>
<!--BEGIN HEADER-->
		<div id="account_container">
			<div class="container_12">
				<div class="grid_12" id="account_nav">
					<div id="log_in">
						<ul>
							<li><a href="client.php">My Account</a></li>
							<li><a href="cart.php">My Cart</a></li>
							<li><a href="login.php">Log In</a></li>
							<li><a href="login.php">Register</a></li>
							<li class="noborder"><a href="admin.php">Admin</a></li>
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