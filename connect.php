<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "test";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());
?>