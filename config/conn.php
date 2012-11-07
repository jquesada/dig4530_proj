<?php
$server = "localhost";
$user_name = "root";
$pass = "root";

$db=mysql_connect($server, $user_name, $pass);
mysql_select_db("oojo", $db);