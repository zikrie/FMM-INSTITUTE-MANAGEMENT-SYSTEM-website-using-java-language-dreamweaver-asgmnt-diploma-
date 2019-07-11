<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_GET['z'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='list_records.php'>Back to main page</a>";
}

else {
echo "takkkkkkkkkk jadiiiiiiiiiiiiii hahahahaha  bodoh";
}
?> 

<?php
// close connection 
mysql_close();
?>