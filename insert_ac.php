<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

 
// Get values from form 
$progCode=$_POST['progCode'];
$progName=$_POST['progName'];
$time=$_POST['time'];
$date=$_POST['date'];
$venue=$_POST['venue'];
$staff=$_POST['staff'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(progCode, progName, time,date,venue,staff)VALUES('$progCode', '$progName', '$time', '$date','$venue','$staff')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>CLICK HERE TO BACK</a>";
echo "<BR>";
echo "<a href='main_organizer.php'>CLICK HERE TO MAIN MENU</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>