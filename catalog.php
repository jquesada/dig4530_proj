<?php 
	$title = "Catalog";
	include_once('includes/header.php');
	include_once('config/conn.php');
	include_once('scripts/get_product_info.php');
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

			$q = $conn->query("select * from products");          
        	$q->setFetchMode(PDO::FETCH_OBJ);

			while ($product = $q->fetch()) { 

				$prodID = $product->id;     
				$productImage = $product->image;
				$productTitle = $product->name;
				$productPrice = $product->price;

				//if there is no image in the db, set a placeholder
				if($productImage == ''){
					$productImage = 'placeholder.png';
				}

				//get the product's categories  
				$categories = getProductCategories($prodID, $conn);
				$productCategories = implode(", ", $categories);

				//get the product's average rating
				$rating = getProductRatingStars($prodID, $conn);
					
				//print all the infos
				print "<div class='catalog_product'>";
				print "<a title='Click to view more information.' href='product_detail.php?id=".$prodID."'><img width='303' height='293' src='img/product_images/".$productImage."' alt='".$productTitle."'/></a>";
				print "<div class='product_box'>";
				print "<h3>".$productTitle."</h3>";
				print "<h4>$".$productPrice."</h4>";
				print "<p>Categories: ".$productCategories."</p>";

				//print rating stars
				for($i = 0; $i < $rating; $i++){
					print "*";
				}
					
				print "<p><a href='cart.php'><img class='right' src='img/addcart.jpeg' alt='Add to Cart'/></a></p>
					<div class='clear'>
					</div>
					</div>
					</div>";		
				
			}
		?>
	</div>
</div>
<!--END SIDEBAR-->		

<?php
	include_once('includes/footer.php');
?>