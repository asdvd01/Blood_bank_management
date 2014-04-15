
	
<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>BLOOD BANK MANAGEMENT SYSTEM</title>
	<link rel="icon"  type="image/png"   href="favicon.png" />
	<link href="css/ui-darkness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
	<script src="js/modernizr.custom.63321.js"></script>

	

<?php
require('connect.php');
session_start();
if(isset($_SESSION['admin']))
header("location:admin2.php");

if (isset($_POST['login']) and isset($_POST['password'])){
if($_POST['login']=='' or $_POST['password']=='')
{  echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message1").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';
}
else{
$username = $_POST['login'];
$password = $_POST['password'];
$username= strip_tags($username);
$password= strip_tags($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$password=sha1($password);
$query = "SELECT * FROM `admin` WHERE ADMIN ='$username' and PASS='$password'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
$_SESSION['admin'] = $username;
header("location:admin2.php");}
else{
  
   echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';
}
}
 }
?>		
</head>

<body>
<div id="top_message" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(255,0,0,0.6),rgba(232,44,12,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Wrong username or Password</div>
<div id="top_message1" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(255,0,0,0.6),rgba(232,44,12,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Empty Fields</div>
<section class="main">
<h1>WELCOME TO BLOOD BANK MANAGEMENT SYSTEM</h1>
<form class="form-1" method="post" action="#">
    <p class="field">
        <input type="text" name="login" placeholder="Administrator Username">
        <i class="icon-user icon-large"></i>
    </p>
        <p class="field">
        <input type="password" name="password" placeholder="Password">
        <i class="icon-lock icon-large"></i>
    </p>        
    <p class="submit">
        <button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
    </p>
</form>   
</section> 
</body>
</html>