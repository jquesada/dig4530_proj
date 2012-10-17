<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
			@import url("css/reset.css");
			@import url("css/text.css");
			@import url("css/960.css");
			@import url("css/styles.css");
		</style>
		<title>
			OOJO Catalog - Justin Quesada
		</title>
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
							<li><a href="#">Log In</a></li>
							<li><a href="#">Register</a></li>
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
							<form action="#" method="get" name="search_form" id="search_form">
								<input type="text" name="search" value="Search" />
								<input name="submit" type="submit" class="submit" id="submit" value="" />
							</form>
						</div>
					</div>
				</div>
			</div>
<!--END HEADER-->

<!--BEGIN SIDEBAR-->
			<div class="container_12">
				<div class="grid_3" id="sidebar">
					<h3>Search by Category</h3>
					<div class="sidebar_box">
						<a href="#">Wordpress</a>
						<a href="#">Tumblr</a>
						<a href="#">HTML/CSS</a>
						<a href="#">Graphic Assets</a>
					</div>
				</div>
<!--END SIDEBAR-->

<!--BEGIN CONTENT-->
				<div class="grid_9" id="content">
					<h2>Catalog</h2> 
					<h3>Wordpress</h3>
					<?php
						include("mysql.php");

						// Query database
						$myquery="SELECT * FROM Products";

						$result = mysql_query($myquery);

						if(!mysql_num_rows($result))
						{

							print "No records found";
						}
						else
						{
							$i = 0;
								while($row = mysql_fetch_array($result)) {     
								$i++;
								$productImage=$row['ProductImage'];
								$productTitle=$row['ProductName'];
								$productPrice=$row['Price'];
								$productCategory=$row['Category'];
								
								print "<div class='catalog_product'>";
								print "<img src='".$productImage."' alt='".$productTitle."'/>";
								print "<div class='product_box'>";
								print "<h3>".$productTitle."</h3>";
								print "<h4>$".$productPrice."</h4>";
								print "Category: ".$productCategory."<br />";
								print "<img src='img/rating.png' alt='Rating' /><br />
										<a href='cart.php'><img class='right' src='img/addcart.jpg' alt='Add to Cart'/></a>
										<div class='clear'>
										</div>
										</div>
										</div>";		
							}
						}
					?>
				</div>
			</div>
<!--END SIDEBAR-->		

<!--BEGIN FOOTER-->	
			<div id="footer_container">
				<div class="container_12">
					<div class="grid_12" id="footer">
						<div class="footer_box">
							<a href="home.php">Home</a>
							<a href="catalog.php">Catalog</a>
							<a href="about.php">About</a>
							<a href="about.php">Contact Us</a>
						</div>
						<div class="footer_box">
							<a href="cart.php">My Cart</a>
							<a href="#">Log-In</a>
							<a href="#">Register</a>
							<a href="admin.php">Admin</a>
						</div>
						<div class="footer_box">
							<a href="#">Facebook</a>
							<a href="#">Twitter</a>
							<a href="#">Google Plus</a>
							<a href="#">Pinterest</a>
						</div>
						<p>This site is not official and is an assignment for a UCF Digital Media course. Designed by Justin Quesada.</p>
					</div>
				</div>
			</div>
<!--END FOOTER-->				
	</body>
</html>