<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login Page</title>
<style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
		 .C {
	font-family: Verdana, Geneva, sans-serif;
}
.V {
	color: #000;
}
</style>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>
<body  background="IMAGE/blue-pyramids-51639-1366x768.jpg">
<table width=100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td><div align="center"><img src="IMAGE/fmm.png" width="100%" height=215 alt="z" /></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <H5><td><div align="center">
      <div align="center">
        <p><strong>
        <H1>DELETE PROGRAMME        </H1>
        <p>        
        <?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql 
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="1082" height="201" border="5" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="10" bgcolor="#FFFFFF"><div align="center"><strong>Delete data in mysql</strong></div></td>
</tr>

<tr>
<td align="center" bgcolor="#FFFFFF"><strong>ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>PROGRAMME CODE</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>PROGRAMME NAME</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>TIME</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>DATE</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>VENUE</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>STAFF NAME</strong></td>
<td align="center" bgcolor="#FFFFFF">DELETE</td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['progCode']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['progName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['time']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['date']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['venue']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['staff']; ?></td>
<td bgcolor="#FFFFFF"><a href="delete_ac.php?id=<? echo $rows['id']; ?>">delete</a></td>
</tr>

<?php
// close while loop 
}
?>

</table>

<div align="center">
  <?php
// close connection; 
mysql_close();
?> 
<a href="main_organizer.php">BACK </a></div>

        </a><a href="formsearching.php">  </a></p>
      </div>
      <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div></H5>
      <p align="center">&nbsp;</p>
    <p align="center">
      <center>
    </p></td>
  </tr>
</table>
</body>
</html>

