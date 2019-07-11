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
    <td><div align="center"><img src="IMAGE/fmm.png" width="100%" height=215 alt="z" /></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><p align="center">

      <body>
    <div align="center">
    <div align="center" style="width:700px; background-color:#ffffff;">
        	<div align="center" style=" margin:10px; border: solid 3px #ff9900;">
    
    <div style="margin:30px;">
   </p>
      <div align="center">PLEASE ENTER YOUR LOGIN TRAINEE DETAIL</div>
   
  <?php
$connHost = "localhost";
$connDB = "test";
$Username = "root";
$password = "";
if (isset($_POST['username'])){
$un = $_POST["username"];
$pw = $_POST["password"];
$con = mysql_connect($connHost,$Username,$password);


if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db($connDB, $con);
mysql_select_db($connDB, $con);
$sqlBasket = "SELECT * from trainee WHERE id = '".$un."' AND pass =
'".$pw."'";
$result1rs = mysql_query($sqlBasket, $con);
$sqlOrderSqlRs = mysql_fetch_array($result1rs);
$num = mysql_num_rows($result1rs);
//$userName = $sqlOrderSqlRs['staff_username'];
//$userID = $sqlOrderSqlRs['staff_password'];
if ($num > 0) {
header('Location: main_organizer.php');
}
else {
echo header('Location: main_organizer.php');
}
}
?>

 <html>
    <head>

    <body>
    <div align="center">
    <div align="center" style="width:700px; background-color:#ffffff;">
        	<div align="center" style=" margin:10px; border: solid 3px #ff9900;">
    
    <div style="margin:30px;">
   <div align="center"> </div>
   
    <form  method="post" action="">
      <div style="margin:30px;">
 <div align="center"><table>
              <td>&nbsp;</td>
            
            </tr>
            <tr>
            <td>ID Number:<input type="text" name="username" id="username" /><input type="hidden" name="idx" id="username2" value="<?php echo $id; ?>"/></td>
            <td>Password:<input type="password" name="password" id="password"/></td>
            <td><input type="submit" name="btn_submit" id="btn_submit" value="Login"/></td>
            </tr>
            <tr></tr>
            </table>
   <p><a href="loginpage.php">
     <input type = "button" value = "BACK" />
&nbsp;</a></p>
      </div>
      
            
      </form>
          
           
         
           
 </body>
 </html>
    
    
    
    
			
      </div>
      
            
      </form>
      <div align="center"></div>
           
           
         
           
 </body>
 </html>
    
    
    
    
			
    </div>
           
           
         
           
 </body>
 </html>
    

		
</table>
</body>
</html>

