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
		<title>
			OOJO Home - Justin Quesada
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
			
<!--BEGIN SLIDER-->
			<div class="container_12">
				<div class="grid_12" id="slider">
							<div id="slides">
								<div class="slides_container">
									<img src="img/slide1.jpg" width="960" height="365px" alt="Slide 1" />
									<img src="img/slide2.jpg" width="960" height="365px" alt="Slide 2" />
									<img src="img/slide3.jpg" width="960" height="365px" alt="Slide 3" />
								</div>
								<a href="#" class="prev"><img src="img/arrow-left.png" width="28" height="46" alt="Arrow Prev" /></a>
								<a href="#" class="next"><img src="img/arrow-right.png" width="28" height="46" alt="Arrow Next" /></a>
							</div>
					
				</div>
<!--END SLIDER-->

<!--BEGIN SIDEBAR-->
				<div class="grid_3" id="sidebar">
					<div class="sidebar_box">
						<img class="center" src="img/wordpress_icon.png" alt="Wordpress"/>
						<p>Browse our extensive collection of customizable <strong>Wordpress</strong> themes. We have something for any type of website you want to create.</p>
					</div>
					<div class="sidebar_box">
						<img class="center" src="img/tumblr_icon.png" alt="Tumblr"/>
						<p>Let your <strong>Tumblr</strong> blog stand out from all the rest! We guarantee we have a theme to match your personality and make your blog shine!</p>
					</div>
					<div class="sidebar_box">
						<img class="center" src="img/css.png" alt="CSS"/>
						<p>Why go through the trouble of hand coding a layout for your website. You can find validated <strong>HTML/CSS</strong> web layouts already coded for you and ready to use. Easily customizable as well!</p>
					</div>
					<div class="sidebar_box">
						<img class="center" src="img/web_icon.png" alt="Graphics"/>
						<p>Add the finishing touches to your already amazing website with our many <strong>Graphical Assets</strong>. Browse through products ranging from custom made web icons to trendy background patterns.</p>
					</div>
				</div>
<!--END SIDEBAR-->

<!--BEGIN CONTENT-->
				<div class="grid_9" id="content">
					<p>Welcome to <strong>OOJO</strong>! We are the online web store for all your graphic resource needs!</p>
					<div id="featured_product">
						<h2>Featured Products</h2>
						<?php
							include("mysql.php");


							$featured=mysql_query("SELECT ProductName,Description,Category,Price,ProductImage FROM Products WHERE SKU = '3'");
							$featured_row= mysql_fetch_row($featured);

							$featured_title= $featured_row[0];
							$featured_description= $featured_row[1];
							$featured_category= $featured_row[2];
							$featured_price= $featured_row[3];
							$featured_image= $featured_row[4];

							print "<img class='center' src='".$featured_image."' alt='".$featured_title."'/>";
							print "<div class='featured_box'>";
							print "<h3>".$featured_title."</h3>";
							print $featured_description."<br />";
							print "<h4>$".$featured_price."</h4>";
							print "Category:".$featured_category."<br />";
							print "<img src='img/rating.png' alt='Rating'/><br />";
							print "<a href='cart.php'><img class='right' src='img/addcart.jpg' alt='Add to Cart'/></a><div class='clear'>";
							print "</div>";
							print "</div>";
						?>
					</div>
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