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
		$q = $conn->query("select * from products where id = $prodID");          
        $q->setFetchMode(PDO::FETCH_OBJ);

			while ($product = $q->fetch()) { 

				$prodID = $product->id;     
				$productImage = $product->image;
				$productDesc = $product->desc;
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
					
				print "<h2>Product Detail: ".$productTitle."</h2>";	
				print "<p><img src='img/product_images/".$productImage."' alt='".$productTitle."'/></p>";
				print "<h3>".$productTitle."</h3>";
				print "<p>".$productDesc."</p>";
				print "<h4>$".$productPrice."</h4>";
				print "<p>Categories: ".$productCategories."</p>";

				//print rating stars
				for($i = 0; $i < $rating; $i++){
					print "*";
				}
					
				print "<p><a href='cart.php'><img src='img/addcart.jpeg' alt='Add to Cart'/></a></p>";		
				
			}
	?> 
	</div>
</div>	

<?php
	include_once('includes/footer.php');
?>