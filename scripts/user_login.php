<?php
ob_start();
session_start();

include_once('../config/conn.php');

$email = mysql_real_escape_string($_POST['email']);
$password = $_POST['password'];

//check if email is valid
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (!preg_match($regex, $email)) {
	header('Location:../login.php?loginError=invalidEmail');
} 

//hash password
$hashed_password = hash('sha256', $password);

//check if user already exists
$user = $conn->query("select * from users where email = '$email' and password = '$hashed_password'"); 
$rows = $user->fetchAll();    

if (sizeof($rows) > 0){
	//user matches, now grab their permissions
	$q = $conn->query("select permission_id from user_permissions as p
			left join users as u on u.id = p.user_id 
			where u.email = '$email'");          
    $q->setFetchMode(PDO::FETCH_OBJ);

    //loop though the results of query and add to array
	while ($permission = $q->fetch()) { 
		$userPermissions = $permission->permission_id;
	}

	//log the user in and return home
	$_SESSION['loggedIn'] = true;
	$_SESSION['userPermissions'] = $userPermissions;
	header("Location: ../home.php?loginSuccess=true"); 
}
else{
	header("Location: ../login.php?loginSuccess=false"); 
}