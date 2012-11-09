<?php 
session_start();
include_once('../config/conn.php');

$cartItems = $_SESSION['cart'];
if(isset($_SESSION['userID'])){
	$user_id = $_SESSION['userID'];
}
else{
	//if the users not logged in, just make their id 0
	$user_id = 0;
}
$first = mysql_real_escape_string($_POST['first']);
$last = mysql_real_escape_string($_POST['last']);
$email = mysql_real_escape_string($_POST['email']);
$created_at = time();
$updated_at = time();

//check if email is valid
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (!preg_match($regex, $email)) {
	header('Location:../checkout.php?checkoutError=invalidEmail');
} 

//enter each item into the orders table
foreach ($cartItems as $item) {
	$product_id = $item['id'];

	$stmt = $conn->prepare("insert into orders (user_id, product_id, created_at, updated_at) values (:user_id, :product_id, :created_at, :updated_at)"); 
		$stmt->execute(array(
					':user_id'    => $user_id,
	                ':product_id' => $product_id,
	                ':created_at' => $created_at,
	                ':updated_at' => $updated_at
	            ));

}

header('Location:https://www.paypal.com');