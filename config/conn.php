<?php
try 
{
    $username = "root";
    $password = "root";    
    $conn = new PDO("mysql:host=localhost;dbname=oojo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} 
catch (PDOException $e) 
{
    echo "Connection failed: " . $e->getMessage() . "\n";
    exit;
}