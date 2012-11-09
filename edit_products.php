<?php 
	$title = "Admin";
	include_once('includes/header.php');
	include_once('config/conn.php');
?>

<!--BEGIN SIDEBAR-->
			<div class="container_12">
				<div class="grid_3" id="sidebar">
					<h3>Control Panel</h3>
					<div class="sidebar_box">
						<a href="edit_products.php">Add/Remove Products</a>
						<a href="edit_users.php">Add/Remove Users</a>
						<a href="edit_orders.php">View and Approve Orders</a>
					</div>
				</div>
<!--END SIDEBAR-->

<!--BEGIN CONTENT-->
				<div class="grid_9" id="content">
						<h2>Welcome Admin</h2> 

						<p>Use the navigation to the left to edit products and users. </p>

						<table class="editTable">
							<tr>
								<th scope="col">SKU </th>
								<th scope="col">Product Name </th>
								<th scope="col">Price </th>
								<th scope="col">Delete Product </th>
							</tr>

							<?php
							$q = $conn->query("select * from products");          
				        	$q->setFetchMode(PDO::FETCH_OBJ);

							while ($product = $q->fetch()) { 

								$productID = $product->id;     
								$sku       = $product->sku;
								$name      = $product->name;
								$price     = $product->price;

								print "<tr>";
								print "<td>". $sku ."</td>";
								print "<td>". $name ." </td>";
								print "<td>". $price ." </td>";
								print "<td><a href='scripts/delete_product.php?id=". $productID ."' class='button'>Remove </a> </td>";
								print "</tr>";
					

							}

							?>

						</table>
				</div>
			</div>
<!--END SIDEBAR-->

<?php
	include_once('includes/footer.php');
?>