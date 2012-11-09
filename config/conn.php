<?php

//if you're using MAMP/WAMP, make the following changes:
//$host = "localhost"
//$dbname = <whatever you named the db>
//$username = "root"
//$password = <whatever your root password is

try 
{
	$host = "sulley.cah.ucf.edu";
	$dbname = "ju773928"
    $username = "ju773928";
    $password = "knights123!";    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} 
catch (PDOException $e) 
{
    echo "Connection failed: " . $e->getMessage() . "\n";
    exit;
}