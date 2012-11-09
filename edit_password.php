<?php 
$title = "Edit Password";
include_once('includes/header.php');
include_once('config/conn.php');

$id = $_SESSION['userID'];

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
		<h2>Edit Password </h2>
		
		<?php 
		if (isset($_GET['editPasswordError'])) {
			print "<p class='error'>The passwords you entered did not match. </p>";
		} 

		if (isset($_GET['updateSuccess'])) {
			print "<p class='updateSuccess'>Your password has been updated. </p>";
		} 
		?>

		<p>Welcome, <?php print $_SESSION['userName']; ?>. Update your password. </p>

		<form action="scripts/user_edit_password.php" method="post" name="edit_password_form" id="edit_password_form">
			<input type="hidden" name="userID" value="<?php print $id; ?>" /> 
			<p><input type="password" name="password" placeholder="New Password" /></p>
			<p><input type="password" name="confirmPassword" placeholder="Retype New Password" /></p>
			<p><input type="submit" class="submit" id="password" value="Update Password" /></p>
		</form>

	</div>
</div>

<?php
include_once('includes/footer.php');
?>