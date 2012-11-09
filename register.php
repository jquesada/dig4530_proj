<?php 
$title = "Register";
include_once('includes/header.php');
?>

<div class="container_12">
	<div class="grid_9" id="content">
		<h2>Register </h2>
		<?php if (isset($_GET['registerError'])) {
			if ($_GET['registerError'] == 'invalidEmail') {
				print '<div class="error">Error: Please enter a valid email.</div>';
			} else if ($_GET['registerError'] == 'passwordMatch') {
				print '<div class="error">Error: Passwords do not match.</div>';
			}
		} ?>
		<form action="scripts/user_register.php" method="post" name="register_form" id="register_form">
			<p><input type="text" name="first" placeholder="First Name" /></p>
			<p><input type="text" name="last" placeholder="Last Name" /></p>
			<p><input type="text" name="email" placeholder="E-mail Address" /></p>
			<p><input type="password" name="password" placeholder="Password" /></p>
			<p><input type="password" name="confirmPassword" placeholder="Retype Password" /></p>
			<p><input type="submit" class="submit" id="register" value="Register" /></p>
		</form>

	</div>
</div>

<?php
include_once('includes/footer.php');
?>
