<?php 
	$title = "Home";
	include_once('includes/header.php');
	include_once('config/conn.php');
	include_once('scripts/get_product_info.php');
?>

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
						<h2>Featured Product</h2>
						
							<?php
							$product = getFeaturedProduct($conn);

							print "<img class='center' src='".$product['image']."' alt='".$product['name']."'/>";
							print "<div class='featured_box'>";
							print "<h3>".$product['name']."</h3>";
							print "<p>".$product['desc']."</p>";
							print "<h4>$".$product['price']."</h4>";
							//print "Category:".$featured_category."<br />";
							print "<img src='img/rating.png' alt='Rating'/><br />";
							print "<a href='cart.php'><img class='right' src='img/addcart.jpg' alt='Add to Cart'/></a><div class='clear'>";
							print "</div>";
							print "</div>";
						?>
					</div>
				</div>
			</div>
<!--END SIDEBAR-->		

<?php
	include_once('includes/footer.php');
?>