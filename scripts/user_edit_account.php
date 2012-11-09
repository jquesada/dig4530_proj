<?php 

include_once('../config/conn.php');

$userID = $_POST['userID'];
$address = mysql_real_escape_string($_POST['address']);
$city = mysql_real_escape_string($_POST['city']);
$state = mysql_real_escape_string($_POST['state']);
$zip = mysql_real_escape_string($_POST['zip']);
$phone = mysql_real_escape_string($_POST['phone']);

//TO-DO: write validation for address, zip, etc 

//check if user already has account info 
$user = $conn->query("select * from user_info where user_id = '$userID'"); 
$rows = $user->fetchAll();    

if (sizeof($rows) > 0){
	//user has account info, so lets update it
	$stmt = $conn->prepare('update user_info set 
		address = :addres,
		city = :city,
		state = :state,
		zip = :zip,
		phone = :phone
	where user_id = :user_id');

	$stmt->execute(array(
			':address'=>$address,
	    	':city'=>$city,
	    	':state'=>$state,
	    	':zip'=>$zip,
	    	':phone'=>$phone,
	    	':user_id'=>$userID
	    ));	
}
else{
	//no account info, add it to db 
	$stmt = $conn->prepare("insert into user_info (user_id, address, city, state, zip, phone) values (:user_id, :address, :city, :state, :zip, :phone)"); 
	
	$stmt->execute(array(
			':user_id'=>$userID,
			':address'=>$address,
	    	':city'=>$city,
	    	':state'=>$state,
	    	':zip'=>$zip,
	    	':phone'=>$phone
	    ));	
}

//go back home
header("Location: ../home.php?loginSuccess=true"); 