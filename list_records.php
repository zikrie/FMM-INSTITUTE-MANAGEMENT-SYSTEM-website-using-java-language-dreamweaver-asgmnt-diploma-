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
<body background="IMAGE/fine-lines-on-colorful-blur-51607-1366x768.jpg">
<table width=100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td><div align="center"><img src="IMAGE/fmm.png" width="100%" height=250" alt="z" /></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><H1 align="center"><div align="center">LIST PROGRAMME</H1>
      
      <div align="center">
  <?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>
        
  <table width="400" border="10" cellspacing="1" cellpadding="10">
    <tr>
      <td><div align="center">
        <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td align="center"><table width="100%" border="2" cellspacing="0" cellpadding="5">
            <tr>
              <td align="center"><strong>ID</strong></td>
              <td align="center"><div align="center"><strong>PROGRAMME CODE</strong></div></td>
              <td align="center"><strong>PROGRAMME NAME</strong></td>
              <td align="center"><strong>TIME</strong></td>
              <td align="center"><strong>DATE</strong></td>
              <td align="center"><strong>VENUE</strong></td>
              <td align="center"><strong>STAFF NAME</strong></td>
              <td align="center"><strong>UPDATE</strong></td>
              <td align="center"><strong>DELETE</strong></td>
              </tr>
            <?php
while($rows=mysql_fetch_array($result)){
?>
            <tr>
              <td align="center"><?php echo $rows['id']; ?></td>
              <td align="center"><?php echo $rows['progCode']; ?></td>
              <td align="center"><?php echo $rows['progName']; ?></td>
              <td  align="center"><?php echo $rows['time']; ?></td>
              <td align="center"><?php echo $rows['date']; ?></td>
              <td align="center"><?php echo $rows['venue']; ?></td>
              <td align="center"><?php echo $rows['staff']; ?></td>
             
              <td align="center"><a href="update.php?x=<?php echo $rows['id']; ?>">update</a></td>
              <td align="center"><a href="delete_ac.php?z=<?php echo $rows['id']; ?>">delete</a></td>
              </tr>
            <?php
}
?>
          </table>            <strong></strong></td>
        </tr>
        </table>
      </div></td>
      </tr>
  </table>
        
  <p>
    <?php
mysql_close();
?>
    
  </p>
  <a href = "insert.php"><br/>
  <button type="submit" name="btn-signup">
     <h1>ADD PROGRAMME</h1></button>
  <p><a href="main_organizer.php"><a href="main_organizer.php"><img src="IMAGE/back.png" alt=" c" width="207" height="84" align="middle" /></p></a></a>
      </div>
    <p align="center"><center>
    </p></td>
  </tr>
</table>
</body>
</html>

