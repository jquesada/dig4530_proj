<?php 
	$title = "Log In";
	include_once('includes/header.php');
?>
<!--BEGIN SIDEBAR-->
			<div class="container_12">
<!--BEGIN CONTENT-->
				<div class="grid_10" id="content">
					<h2>Log In</h2> 
						
					<form action="scripts/login.php" method="post" name="login_form" id="login_form">
						<input type="text" name="email" placeholder="E-mail" />
						<input type="password" name="password" placeholder="Password" />
						<input type="submit" id="submit" value="Log In" />
					</form>		
				</div>
			</div>
<!--END SIDEBAR-->

<?php
	include_once('includes/footer.php');
?>