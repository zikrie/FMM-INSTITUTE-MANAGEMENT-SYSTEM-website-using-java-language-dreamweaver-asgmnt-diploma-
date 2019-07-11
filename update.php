<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$y=$_GET['x'];


// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE id='$y'";
//echo $sql;
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac.php">
<td><table width="100%" border="10" cellspacing="1" cellpadding="0">
  <tr>
    <td rowspan="4">&nbsp;</td>
    <td colspan="10"><div align="center"><strong>Update data in mysql</strong></div></td>
  </tr>
  <tr>
     <td align="center"><strong>ID</strong></td>
    <td align="center"><strong>PROGRAMME CODE</strong></td>
    <td align="center"><strong>PROGRAMME NAME</strong></td>
    <td align="center"><strong>TIME</strong></td>
    <td align="center"><strong>DATE</strong></td>
    <td align="center"><strong>VENUE</strong></td>
    <td align="center"><strong>STAFF NAME</strong></td>
  </tr>
  <tr>
    <td align="center"><input name="id" type="text" id="id2" value="<?php echo $rows['id']; ?>" readonly/></td>
    <td align="center"><input name="progCode" type="text" id="progCode" value="<?php echo $rows['progCode']; ?>" /></td>
    <td align="center"><input name="progName" type="text" id="progName" value="<?php echo $rows['progName']; ?>" size="15" /></td>
    <td><input name="time" type="text" id="email" value="<?php echo $rows['time']; ?>" size="15" /></td>
    <td><input name="date" type="date" id="date" value="<?php echo $rows['date']; ?>" size="15" /></td>
    <td><input name="venue" type="text" id="venue" value="<?php echo $rows['venue']; ?>" size="15" /></td>
    <td><input name="staff" type="text" id="staff" value="<?php echo $rows['staff']; ?>" size="15" /></td>
  </tr>
  <tr>
    <td colspan="10"><div align="center">
      <input name="idx" type="hidden" id="id3" value="<?php echo $rows['id']; ?>" />
      <center><input  type="submit" name="Submit" value="Submit" />
      <a href="main_organizer.php">BACK</a></div></td>
      
    </tr>
</table></td>
</form>
</tr>
</table>

<?php
// close connection 
mysql_close();
?>       