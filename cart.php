<?php 
$title = "Cart";
include_once('includes/header.php');
?>

<!--BEGIN CONTENT-->
<div class="container_12">
	<div class="grid_12" id="content">
		<h2>My Cart</h2> 
		
		<div class="featured_box">
<?php
		$cartItems = $_SESSION['cart'];

		if(sizeof($cartItems) ==  0){
			print "There are no items in your cart.";
		}
		else{
?>
			<table class="cartCheckout">
				<tr>
					<th scope="col">Image </th>
					<th scope="col">Name </th>
					<th scope="col">Description </th>
					<th scope="col">Cost </th>
					<th scope="col">Remove from Cart </th>
				</tr>

<?php
				$i = 0;
				$total = 0;
				foreach ($cartItems as $item) {
					if($i%2){
						$class="darkRow";
					}
					else{
						$class="lightRow";
					}
					print "<tr class='". $class ."''>";
					print "<td><img height='100px' width='100px' src='img/product_images/". $item['image'] ."' alt='". $item['name'] ."' /></td>";
					print "<td>". $item['name'] ."</td>";
					print "<td class='cartDesc'>". $item['desc'] ." </td>";
					print "<td>". $item['price'] ." </td>";
					print "<td><a href='scripts/remove_from_cart.php?id=". $item['id'] ."' class='button'>Remove </a> </td>";
					print "</tr>";
					$i++;
					$total += $item['price'];
				}
		}
?>
			</table>
			<?php if(sizeof($cartItems) >  0){ ?>
				<p class='total'><strong>Total: $<?php print $total; ?></strong></p>
			<?php } ?>
			<a href="checkout.php"><img class="right" src="img/checkout.jpeg" alt="Checkout"/></a>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!--END SIDEBAR-->		

<?php
	include_once('includes/footer.php');
?>