<!--BEGIN FOOTER-->	
			<div id="footer_container">
				<div class="container_12">
					<div class="grid_12" id="footer">
						<div class="footer_box">
							<a href="home.php">Home</a>
							<a href="catalog.php">Catalog</a>
							<a href="about.php">About</a>
							<a href="about.php">Contact Us</a>
							<a href="policies.php">Policies</a>
							<a href="privacy.php">Privacy</a>
						</div>
						<div class="footer_box">
							<a href="cart.php">My Cart</a>
							<?php 

							if($_SESSION['loggedIn']){
								print "<a href='client.php'>My Account</a>";
								print "<a href='scripts/logout.php'>Log Out</a>";

								if($_SESSION['userPermissions'] == 1 || $_SESSION['userPermissions'] == 2){
									print "<a href='admin.php'>Admin</a>";
								}
							}
							else{
								print "<a href='login.php'>Log In</a>";
								print "<a href='register.php'>Register</a>";
							}
							
							?>
						</div>
							<div class="footer_box">
							<a href="#">Facebook</a>
							<a href="#">Twitter</a>
							<a href="#">Google Plus</a>
							<a href="#">Pinterest</a>
						</div>
						<p>This site is not official and is an assignment for a UCF Digital Media course. Designed by Group Oojo.</p>
					</div>
				</div>
			</div>
<!--END FOOTER-->		
	</body>
</html>