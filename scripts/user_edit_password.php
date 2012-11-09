<?php
ob_start();

include_once('../config/conn.php');

$userID = $_POST['userID'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

print $password;
print $confirmPassword;

//check passwords match
if($password != $confirmPassword){
	header('Location:../edit_password.php?fromClientPage=true&editPasswordError=passwordMatch');
}
else{
	//encrypt password
	$hashed_password = hash('sha256', $password);

	//update the password
	$stmt = $conn->prepare('update users set 
			password = :password
			where id = :id');

	$stmt->execute(array(
			':password' => $hashed_password,
			':id'       => $userID
		));	

	//send the user back
	header("Location: ../edit_password.php?fromClientPage=true&updateSuccess=true"); 	
}



