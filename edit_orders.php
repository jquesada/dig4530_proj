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
								<th scope="col">Order # </th>
								<th scope="col">Product Name </th>
								<th scope="col">Customer E-mail </th>
								<th scope="col">Delete Order </th>
								<th scope="col">Approve Order </th>
							</tr>

							<?php
							$q = $conn->query("select o.id, p.name, u.email from orders as o
									right join products as p on p.id = o.product_id
									right join users as u on u.id = o.user_id");          
				        	$q->setFetchMode(PDO::FETCH_OBJ);

							while ($order = $q->fetch()) { 

								$orderID   = $order->id;     
								$prodName  = $order->name;
								$email     = $order->email;

								print "<tr>";
								print "<td>". $orderID ."</td>";
								print "<td>". $prodName ." </td>";
								print "<td>". $email ." </td>";
								print "<td><a href='scripts/delete_order.php?id=". $orderID ."' class='button'>Remove </a> </td>";
								print "<td><a href='scripts/approve_order.php?id=". $orderID ."' class='button'>Approve </a> </td>";
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