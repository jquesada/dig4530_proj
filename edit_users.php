<?php 
	$title = "Admin";
	include_once('includes/header.php');
	include_once('config/conn.php');
?>

<!--BEGIN SIDEBAR-->
			<div class="container_12">
				<div class="grid_3" id="sidebar">
					<h3>Control Panel</h3>
					<div class="sidebar_box">
						<a href="edit_products.php">Add/Remove Products</a>
						<a href="edit_users.php">Add/Remove Users</a>
						<a href="edit_orders.php">View and Approve Orders</a>
					</div>
				</div>
<!--END SIDEBAR-->

<!--BEGIN CONTENT-->
				<div class="grid_9" id="content">
						<h2>Welcome Admin</h2> 

						<p>Use the navigation to the left to edit products and users. </p>

						<table class="editTable">
							<tr>
								<th scope="col">First </th>
								<th scope="col">Last </th>
								<th scope="col">E-mail </th>
								<th scope="col">Delete User </th>
							</tr>

							<?php
							$q = $conn->query("select * from users");          
				        	$q->setFetchMode(PDO::FETCH_OBJ);

							while ($user = $q->fetch()) { 

								$userID = $user->id;     
								$first  = $user->first;
								$last   = $user->last;
								$email  = $user->email;

								print "<tr>";
								print "<td>". $first ."</td>";
								print "<td>". $last ." </td>";
								print "<td>". $email ." </td>";
								print "<td><a href='scripts/delete_user.php?id=". $userID ."' class='button'>Remove </a> </td>";
								print "</tr>";
					

							}

							?>

						</table>
				</div>
			</div>
<!--END SIDEBAR-->

<?php
	include_once('includes/footer.php');
?>