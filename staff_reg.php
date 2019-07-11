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
      <?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: main_trainee.php");
}
include_once 'config1.php';

if(isset($_POST['submit']))
{
 $id = mysql_real_escape_string($_POST['id']);
 $name = mysql_real_escape_string($_POST['name']);
 $ic = mysql_real_escape_string($_POST['ic']);
 $address = mysql_real_escape_string($_POST['address']);
 $phonenum = mysql_real_escape_string($_POST['phonenum']);
 $postcode = mysql_real_escape_string($_POST['postcode']);
 $age = mysql_real_escape_string($_POST['age']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 
 if(mysql_query("INSERT INTO test_mysql3 (id,name,ic,phononum,address,postcode,age,email,pass) VALUES('$id','$name','$ic','$phonenum','$address','$postcode','$age','$email','$upass')"))
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
</p>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STAFF REGISTRATION</title>
</head>
<body background="file:///G|/ /traineeSystem/b47bda4cc8cb78d0333c5366a5880a13.jpg">

<div align="center">
<div align="center" style="width:700px; background-color:#ffffff;">
        	<div align="center" style=" margin:10px; border: solid 3px #ff9900;">
            	
           	  <div style="margin:30px;">
<div align="center"><strong>STAFF REGISTRATION</strong></div> 

           	  <div style="margin:30px;">
               	

              <form action = "" method = "post">
      <div align="center">
        <table>
                  <tr>
                    <td width="150">
                      <b>ID NUMBER*
                      </td>
                    <td width="147"> <input type = "text" name = "id" placeholder="eg.(2014xxxxxx)" required/></td>
                    </tr>
                  
                  <tr>
                    <td width="150">
                      <b>NAME
                      </td>
                    <td>
                      
                      <input type = "text" name = "name" placeholder="Enter your full name" required/>
                      </td>
                    </tr>
                  <tr>
                    <td width="150">
                      <b>IC NUMBER*
                      </td>
                    <td>
                      <input type = "text" name = "ic" placeholder="eg.(9605-xx-xxxx)" required/>
                      </td>
                    </tr>
                  
                  <tr>
                    <td width="150">
                      <b>ADDRESS
                      </td>
                    <td>
                      <input type = "text"  name = "address" required/>
                      </td>
                    </tr>
                  
                  
                  <tr>
                    <td width="150">
                      <b>PHONE NUMBER*
                      </td>
                    <td>
                      <input type = "text"  name = "phonenum" required/>
                      </td>
                    </tr>
                  
                  <tr>
                    <td width="150">
                      <b>POSTCODE
                      </td>
                    <td>
                      <input type = "text"  name = "postcode" required/>
                      </td>
                    </tr>
                  
                  
                  
                  <tr>
                    <td width="150">
                     <b>AGE</td>
                    <td>
                      <input type = "text"  name = "age" placeholder="eg.(YEARS)" required/> 
                      
                     </td>
                    </tr>
                  <tr>
                    <td width="150">
                     <b>E-MAIL*</td>
                    <td>
                      <input type = "text" name = "email" placeholder="eg.xxxxxxxxx@gmail.com)" required/> 
                     </td>
                    </tr>
                  
                  <tr>
                    <td width="150">
                      <b>PASSWORD
                    *</td>
                    <td>
                      <input type = "password" name = "pass"  placeholder="eg.(abc1234)" required/>
                      
                    </td>
                    </tr>
                  
        </table> 
                <div style="margin:30px;">
                
      </div>
              <button type="submit" name="submit">
              <div align="center">SUBMIT</div>
              </button> 

    	

                 <a href="main_organizer.php">
                 <input type = "button" value = "BACK" >
   
<input  type = "button" value ="RESET" >
              	 

</body>
</html>
    <form  method="post" action="">
      <div style="margin:30px;">
 <div align="center"></div>
    </form>
    <div align="center">
            </div>
           
           
         
           
 </body>
 </html>
    

		
</table>
</body>
</html>

