<?php
$title = "Product Detail";
include_once('includes/header.php');
include_once('config/conn.php');
include_once('scripts/get_product_info.php');

//get product id
$prodID = mysql_real_escape_string($_GET['id']);

?>

<div class="container_12">
<!--BEGIN CONTENT-->
	<div class="grid_12" id="content">
	<?php
		$product = getProductInfo($prodID, $conn);

		//if there is no image in the db, set a placeholder
		if($product['image'] == ''){
			$productImage = 'placeholder.png';
		}
		else{
			$productImage = $product['image'];
		}

		//get the product's categories  
		$categories = getProductCategories($prodID, $conn);
		$productCategories = implode(", ", $categories);

		//get the product's average rating
		$rating = getProductRatingStars($prodID, $conn);
					
		print "<h2>Product Detail: ".$product['name']."</h2>";	
		print "<p><img src='img/product_images/".$productImage."' alt='".$product['name']."'/></p>";
		print "<h3>".$product['name']."</h3>";
		print "<p>".$product['desc']."</p>";
		print "<h4>$".$product['price']."</h4>";
		print "<p>Categories: ".$productCategories."</p>";

		//print rating stars
		for($i = 0; $i < $rating; $i++){
			print "*";
		}
					
		print "<p><a href='scripts/add_to_cart.php?id=$prodID'><img src='img/addcart.jpeg' alt='Add to Cart'/></a></p>";						
			
	?> 
	</div>
</div>	

<?php
	include_once('includes/footer.php');
?>