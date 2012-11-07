<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	$title = "Catalog";
	include_once('includes/header.php');
	include_once('config/conn.php');
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
			$q="select * from products";

			$result = mysql_query($q, $db);

			if(!mysql_num_rows($result))
			{
				print "<p>No records found.</p>";
			}
			else
			{
				while($row = mysql_fetch_array($result)) { 
					$prodID = $row['id'];     
					$productImage = $row['image'];
					$productTitle = $row['name'];
					$productPrice = $row['price'];

					$cat_q = "select * from categories where product_id = $prodID";
					$cat_result = mysql_query($cat_q, $db);

					$categories = array();
					while($cat_row = mysql_fetch_array($cat_result)){
						$category = $cat_row['category_name'];
						array_push($categories, $category);
					}
					
					$productCategories = implode(", ", $categories);

					print "<div class='catalog_product'>";
					print "<a title='Click to view more information.' href='product_detail.php?id=".$prodID."'><img width='303' height='293' src='img/product_images/".$productImage."' alt='".$productTitle."'/></a>";
					print "<div class='product_box'>";
					print "<h3>".$productTitle."</h3>";
					print "<h4>$".$productPrice."</h4>";
					print "Categories: ".$productCategories."<br />";
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