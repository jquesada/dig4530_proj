<?php

$prodID = $_GET['id'];
//TO-DO sanitize id from url 
 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
$title = "Product Detail";
include_once('includes/header.php');
include_once('config/conn.php');
?>

<!--BEGIN SIDEBAR-->
<div class="container_12">
	<div class="grid_3" id="sidebar">
		<h3>Search by Category</h3>
			<div class="sidebar_box">
				<a href="#">Wordpress</a>
				<a href="#">Tumblr</a>
				<a href="#">HTML/CSS</a>
				<a href="#">Graphic Assets</a>
			</div>
	</div>
<!--END SIDEBAR-->

<!--BEGIN CONTENT-->
	<div class="grid_9" id="content">
		<h2>Product Detail</h2> 
		<?php print $prodID; ?>
	</div>
</div>
<!--END SIDEBAR-->		

<?php
	include_once('includes/footer.php');
?>