<?php
session_start();
include_once('../config/conn.php');
include_once('../scripts/get_product_info.php');

//get product id
$prodID = mysql_real_escape_string($_GET['id']);

//get product info
$product = getProductInfo($prodID, $conn);

//add the product to cart session
$_SESSION['cart'][$prodID] = $product;

//send user to cart so they can see their items
header("Location: ../cart.php"); 