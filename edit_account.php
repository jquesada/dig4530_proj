<?php 
$title = "Edit Account";
include_once('includes/header.php');
include_once('config/conn.php');
include_once('scripts/get_user_info.php');

//check if the user has info in the db
$id = $_SESSION['userID'];
$user = getUserInfo($id, $conn);

if(sizeof($user) > 0){
	//user info exists, populate some variables 
	$address = $user['address'];
	$city = $user['city'];
	$state = $user['state'];
	$zip = $user['zip'];
	$phone = $user['phone'];
}
else{
	//user info does not exist, set some placeholders 
	$address = "Address";
	$city = "City";
	$state = "State";
	$zip = "Zip";
	$phone = "Phone Number";
}

?>

<div class="container_12">
<?php 
//only display the side bar if a user got here from client page
if (isset($_GET['fromClientPage'])) { ?>
	<div class="grid_3" id="sidebar">
		<h3>Manage Account</h3>
			<div class="sidebar_box">
				<a href="edit_password.php?fromClientPage=true">Change Password</a>
				<a href="edit_account.php?fromClientPage=true">Mailing Address</a>
			</div>
		</div>
<?php } ?>

<!--BEGIN CONTENT-->
	<div class="grid_9" id="content">
		<h2>Edit Account Details </h2>

		<p>Welcome, <?php print $_SESSION['userName']; ?>. Please enter your shipping information. </p>

		<?php if (isset($_GET['editAccountError'])) {
			//TO-DO: handle validation errors
		} ?>
		<form action="scripts/user_edit_account.php" method="post" name="edit_account_form" id="edit_account_form">
			<input type="hidden" name="userID" value="<?php print $id; ?>" /> 
			<p><input type="text" name="address" placeholder="<?php print $address; ?>" /></p>
			<p><input type="text" name="city" placeholder="<?php print $city; ?>" /></p>
			<p><input type="text" name="state" placeholder="<?php print $state; ?>" /></p>
			<p><input type="text" name="zip" placeholder="<?php print $zip; ?>" /></p>
			<p><input type="text" name="phone" placeholder="<?php print $phone; ?>" /></p>
			<p><input type="submit" class="submit" id="register" value="Update Account" /></p>
		</form>

	</div>
</div>

<?php
include_once('includes/footer.php');
?>