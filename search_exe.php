<?php
include "connect.php";
$progCode= $_POST['progCode']; //get the nama value from form
$q = "SELECT * from test_mysql where progCode like '%$progCode%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>ID</td>
<td>PROGRAMME CODE</td>
<td>PROGRAMME NAME</td>
<td>TIME</td>
<td>DATE</td>
<td>VENUE</td>
<td>STAFF NAME</td>

</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['id']."</td>
<td>".$data['progCode']."</td>
<td>".$data['progName']."</td>
<td>".$data['time']."</td>
<td>".$data['date']."</td>
<td>".$data['venue']."</td>
<td>".$data['staff']."</td>

</tr>";



}
echo "</table>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p><a href="formsearching.php">BACK TO SEARCHING</a></p>
  <p><a href="main_organizer.php">BACK TO MENU</a></p>
</div>
</body>
</html>