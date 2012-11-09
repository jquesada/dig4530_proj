<?php 
$title = "Client";
include_once('includes/header.php');
include_once('config/conn.php');
include_once('scripts/get_user_info.php');
?>

<!--BEGIN SIDEBAR-->
<div class="container_12">
	<div class="grid_3" id="sidebar">
		<h3>Manage Account</h3>
			<div class="sidebar_box">
				<a href="edit_password.php?fromClientPage=true">Change Password</a>
				<a href="edit_account.php?fromClientPage=true">Mailing Address</a>
			</div>
		</div>
<!--END SIDEBAR-->

<!--BEGIN CONTENT-->
	<div class="grid_9" id="content">

		<?php
		$userID = $_SESSION['userID'];
		$user = getUserInfo($userID, $conn);

		print "<h2>Welcome ". $user['first'] ." ". $user['last'] ."</h2>";

		print "<p>We have the following shipping information on file for you. To update your account, please use the links to the left.</p>";

		print "<p>". $user['address'] ."</p>";
		print "<p>". $user['city'] .", ". $user['state'] ." ". $user['zip'] ."</p>";
		print "<p>". $user['phone'] ."</p>";
		?>
	</div>
</div>
<!--END SIDEBAR-->		

<?php
include_once('includes/footer.php');
?>