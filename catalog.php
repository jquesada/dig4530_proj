<?php 
	$title = "Catalog";
	include_once('includes/header.php');
?>

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

<?php
	include_once('includes/footer.php');
?>