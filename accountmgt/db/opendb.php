<?php
include("../include/configs.php");
mysql_connect($dbhost,$dbuser,$dbpassword) or die("Unable to connect to database. MySQL ERROR Exception: " . mysql_error() . "<br>Back to <a href=\"index.php\">Database Management</a>");
@mysql_select_db($database) or die( "Unable to select database. MySQL ERROR Exception: " . mysql_error() . "<br>Back to <a href=\"index.php\">Database Management</a>");
?>
