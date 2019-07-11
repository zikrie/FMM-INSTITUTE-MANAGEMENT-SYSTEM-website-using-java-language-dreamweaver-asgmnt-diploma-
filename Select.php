<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database 
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>
 
<table width="483" height="91" border="4" cellpadding="3" cellspacing="0">
 <tr>
 <th width="27%" height="47">ID</th>
 <th>NAME</th>
 <th>LAST NAME</th>
 <th>EMAIL</th>
 </tr>
 
 
<?php
// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td width="27%" height="36" align="center"><?php echo $rows['id']; ?></td>
<td align="center" width="27%"><?php echo $rows['name']; ?></td>
<td align="center" width="24%"><?php echo $rows['lastname']; ?></td>
<td  align="center"width="22%"><?php echo $rows['email']; ?></td>
</tr>

<?php
// close while loop 
}

?>
</table></td>
</tr>
<td colspan="2">


<?php
// close MySQL connection 
mysql_close();
?>