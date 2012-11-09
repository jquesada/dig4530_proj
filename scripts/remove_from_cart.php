<?php
session_start();
include_once('../config/conn.php');
include_once('../scripts/get_product_info.php');

//get product id
$prodID = mysql_real_escape_string($_GET['id']);

//remove the item from cart session
unset($_SESSION['cart'][$prodID]);

header("Location: ../cart.php"); 