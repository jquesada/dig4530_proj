<?php 
	$title = "Log In";
	include_once('includes/header.php');
?>
<!--BEGIN SIDEBAR-->
			<div class="container_12">
<!--BEGIN CONTENT-->
				<div class="grid_12" id="content">
					<h2>Log In</h2> 
						
					<form action="scripts/user_login.php" method="post" name="login_form" id="login_form">
						<p><input type="text" name="email" placeholder="E-mail" /></p>
						<p><input type="password" name="password" placeholder="Password" /></p>
						<p><input type="submit" id="submit" value="Log In" /></p>
					</form>		
				</div>
			</div>
<!--END SIDEBAR-->

<?php
	include_once('includes/footer.php');
?>