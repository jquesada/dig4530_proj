<?php
session_start();

if($_SESSION['loggedIn'] && (($_SESSION['userPermissions'] == 1 || $_SESSION['userPermissions'] == 2))){
	$orderID = $_GET["id"];   	
	include_once("../config/conn.php");	
    
	//delete the voter 
	$stmt = $conn->exec("delete from orders where id = '$orderID'");

	header("Location: ../edit_orders.php"); 

}
else{
	print "You do not have permission to delete orders.";
}