<?php
ob_start();
session_start();

include_once('../config/conn.php');

$first = mysql_real_escape_string($_POST['first']);
$last = mysql_real_escape_string($_POST['last']);
$email = mysql_real_escape_string($_POST['email']);
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

//check if email is valid
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (!preg_match($regex, $email)) {
	header('Location:../register.php?registerError=invalidEmail');
} 

//check passwords match
if($password != $confirmPassword){
	header('Location:../register.php?registerError=passwordMatch');
}

//check if user already exists
$user = $conn->query("select * from users where email = '$email'"); 
$rows = $user->fetchAll();    

if (sizeof($rows) > 0){
	//user already exists
	header('Location:../register.php?registerError=userExists');
}
else{
	//first encrypt the password
	$hashed_password = hash('sha256', $password);

	//ok everything is good, insert the user in db
	try{
		$stmt = $conn->prepare("insert into users (first, last, password, email) values (:first, :last, :password, :email)"); 
		$stmt->execute(array(
						  ':first'=>$first,
	                  	  ':last'=>$last,
	                  	  ':password'=>$hashed_password,
	                  	  ':email'=>$email
	                	));

		//grab the id of the user that was just entered in the db
		$user_id = $conn->lastInsertId();

        //add the user's permissions - everyone starts out as a basic user 
		$stmt2 = $conn->prepare("insert into user_permissions (user_id, permission_id) values (:user_id, :permission_id)"); 
		$stmt2->execute(array(
						  ':user_id'=>$user_id,
	                  	  ':permission_id'=>3,
	                	));
	}
	catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();   
	} 
}

//set the logged in and permission session and send the user to the edit account page 
$_SESSION['loggedIn'] = true;
$_SESSION['userPermissions'] = 3;
header("Location: ../edit_account.php?loginSuccess=true"); 