<?php
session_start();

if($_SESSION['loggedIn'] && (($_SESSION['userPermissions'] == 1 || $_SESSION['userPermissions'] == 2))){
	$userID = $_GET["id"];   	
	include_once("../config/conn.php");	
    
	//delete the voter 
	$stmt = $conn->exec("delete from users where id = '$userID'");

	header("Location: ../edit_users.php"); 

}
else{
	print "You do not have permission to delete users.";
}