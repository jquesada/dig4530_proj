<?php 
	$title = "Checkout";
	include_once('includes/header.php');
?>

<!--BEGIN CONTENT-->
			<div class="container_12">
				<div class="grid_12">
					<h2>Billing and Shipping Information</h2> 
					<h3>Billing Information</h3>
					<div class="featured_box">
						 <form method="post" action="#">
							<label>Card Number:</label><br />
							<input type="text" /><br />
							
							<label>First Name:</label><br />
							<input type="text" /><br />
							
							<label>Last Name:</label><br />
							<input type="text" /><br />
							
							<label>Address:</label><br />
							<input type="text" /><br />

							<label>City:</label><br />
							<input type="text" /><br />
							
							<label>State:</label><br />
							<input type="text" /><br />
							
							<label>Zip:</label><br />
							<input type="text" /><br />
						</form>
					</div>
					
					<h3>Shipping Information</h3>
					<div class="featured_box">
						<form method="post" action="#">
							<label>First Name:</label><br />
							<input type="text" /><br />
							
							<label>Last Name:</label><br />
							<input type="text" /><br />
							
							<label>Address:</label><br />
							<input type="text" /><br />
							
							<label>City:</label><br />
							<input type="text" /><br />
							
							<label>State:</label><br />
							<input type="text" /><br />
							
							<label>Zip:</label><br />
							<input type="text" /><br />
						</form>
					</div>
				</div>
			</div>
			
<!--END SIDEBAR-->		

<?php
	include_once('includes/footer.php');
?>