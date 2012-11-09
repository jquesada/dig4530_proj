<?php
session_start();

if($_SESSION['loggedIn'] && (($_SESSION['userPermissions'] == 1 || $_SESSION['userPermissions'] == 2))){
	$productID = $_GET["id"];   	
	include_once("../config/conn.php");	
    
	//delete the voter 
	$stmt = $conn->exec("delete from products where id = '$productID'");

	header("Location: ../edit_products.php"); 
}
else{
	print "You do not have permission to delete products.";
}