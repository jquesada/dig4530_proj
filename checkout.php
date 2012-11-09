<?php 
$title = "Checkout";
include_once('includes/header.php');
include_once('config/conn.php');

//check if the user is logged in and has shipping info in db
if($_SESSION['loggedIn']){
	include_once('scripts/get_user_info.php');

	//check if the user has info in the db
	$id = $_SESSION['userID'];
	$user = getUserInfo($id, $conn);

	if(sizeof($user) > 0){
		//user info exists, populate some variables 
		$first = $user['first'];
		$last = $user['last'];
		$email = $user['email'];
	}
	else{
		//user info does not exist, set some placeholders 
		$first = "";
		$last = "";
		$email = "";
	}
}
else{
	//user info does not exist, set some placeholders 
	$first = "";
	$last = "";
	$email = "";
}
?>

<!--BEGIN CONTENT-->
			<div class="container_12">
				<div class="grid_12">
					<h2>Billing and Customer Information</h2> 

					<p>The items you are ordering will be delivered digitally via e-mail. If you are logged in, please confirm your information below. </p>

					<p>If you are not logged in, please provide the following information. </p>

					<h3>Customer Information</h3>
					<div class="featured_box">
						<form method="post" action="scripts/process_order.php">
							<p><label>First Name:</label><br />
							<input type="text" name="first" placeholder="<?php print $first; ?>"/></p>
							
							<p><label>Last Name:</label><br />
							<input type="text" name="last" placeholder="<?php print $last; ?>"/></p>
							
							<p><label>E-mail:</label><br />
							<input type="text" name="email" placeholder="<?php print $email; ?>"/></p>
							

							<p><input type="submit" class="submit" value="Submit Order" /></p>
							<p>*Note: clicking submit order will forward you to paypal where you will be prompted to enter your billing information. Please note that if your payment is not submitted via Paypal, your order will be canceled. </p>

						</form>
					</div>
				</div>
			</div>
			
<!--END SIDEBAR-->		

<?php
	include_once('includes/footer.php');
?>