$host="localhost";
$username="phpeasystep";
$password="1234";
$db_name="test";


mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select db"); 
