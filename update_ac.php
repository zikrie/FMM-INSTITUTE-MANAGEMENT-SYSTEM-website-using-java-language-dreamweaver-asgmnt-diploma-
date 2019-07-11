<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name 

$tt= $_POST['idx'];

$progCode =  $_POST['progCode'];
$progName =$_POST['progName'];
$time =$_POST['time'];
$date =$_POST['date'];
$venue =$_POST['venue'];
$staff =$_POST['staff'];
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// update data in mysql database 
$sql="UPDATE $tbl_name SET id='$tt' , progCode='$progCode', progName='$progName', time='$time', date='$date', venue='$venue', staff='$staff' WHERE id='$tt'";

$result=mysql_query($sql);

// if successfully updated. 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='list_records.php'>View result</a>";
}

else {
echo "ERROR";
}

?>