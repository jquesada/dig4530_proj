<?php

$db=mysql_connect("sulley.cah.ucf.edu", "ju773928", "knights123!");
mysql_select_db("ju773928", $db);
$db = mysql_select_db("ju773928") or print "connect failed because ".mysql_error();

?>