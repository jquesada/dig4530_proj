<?php 
	$title = "Admin";
	include_once('includes/header.php');
?>

<!--BEGIN SIDEBAR-->
			<div class="container_12">
				<div class="grid_3" id="sidebar">
					<h3>Control Panel</h3>
					<div class="sidebar_box">
						<a href="edit_products.php">Add/Remove Products</a>
						<a href="edit_users.php">Add/Remove Users</a>
						<a href="orders.php">View and Approve Orders</a>
					</div>
				</div>
<!--END SIDEBAR-->

<!--BEGIN CONTENT-->
				<div class="grid_9" id="content">
						<h2>Welcome Admin</h2> 

						<p>Use the navigation to the left to edit products and users. </p>
				</div>
			</div>
<!--END SIDEBAR-->

<?php
	include_once('includes/footer.php');
?>