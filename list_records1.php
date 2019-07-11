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
    <td><p align="center">&nbsp;
<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: userWelcome.php");
}
include_once 'config1.php';

if(isset($_POST['submit']))
{
 $id = mysql_real_escape_string($_POST['id']);
 $name = mysql_real_escape_string($_POST['name']);
 $ic = mysql_real_escape_string($_POST['ic']);
 $address = mysql_real_escape_string($_POST['address']);
 $phononum = mysql_real_escape_string($_POST['phononum']);
 $postcode = mysql_real_escape_string($_POST['postcode']);
 $age = mysql_real_escape_string($_POST['age']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 if(mysql_query("INSERT INTO trainee(id,name,ic,phononum,address,postcode,age,email,pass) VALUES('$id','$name','$ic','$phononum','$address','$postcode','$age','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TRAINEE REGISTRATION</title>
</head>
<body>
<div align="center">
<div align="center" style="width:700px; background-color:#ffffff;">
        	<div align="center" style=" margin:10px; border: solid 3px #ff9900;">
            	
           	  <div style="margin:30px;">
           	  <div style="margin:30px;">
               	

              <form action = "" method = "post">
              <div style="margin:30px;">
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
<body style='background-color: #F63; font-size: 24px;'>
<table width=100%" border="0" cellspacing="0" cellpadding="10">
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
        
  <table width="400" border="0" cellspacing="1" cellpadding="10">
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
              <td align="center"><strong>select</strong></td>
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
             
              <td align="center">&nbsp;</td>
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
   
     
      </div>
    <p align="center"><center>
    </p>
    <p align="center"><a href="mainMenu_trainee.php">BACK</a></p></td>
  </tr>
</table>
</body>
</html>


       
         
         
    </body>
</html>    
    
    
   </td>
  </tr>
</table>
</body>
</html>

