<?php
$mysql_hostname = "localhost";
$mysql_user = "id5200844_project";
$mysql_password = "project123";
$mysql_database = "id5200844_mydb";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>