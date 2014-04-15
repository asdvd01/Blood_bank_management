
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>BLOOD BANK MANAGEMENT SYSTEM</title>
	<link rel="icon"  type="image/png"  href="favicon.png" />
	 <link href="css/ui-darkness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/donor.css" />   
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
	<?php
require('connect.php');
session_start();
if (!isset($_SESSION['admin']))
header("location:admin.php");
if(isset($_POST['hname']) && isset($_POST['hadd']) )
{
$hname=$_POST['hname'];
$hadd=$_POST['hadd'];

$q1="UPDATE hospital set HADD='$hadd' where HNAME='$hname'";
mysql_query($q1) or die(mysql_error());

 echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message2").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';

}
if(isset($_POST['hname']) && isset($_POST['hphone']) )
{
$hname=$_POST['hname'];
$hphone=$_POST['hphone'];
$q2="UPDATE hospital set HPHONE='$hphone' where HNAME='$hname'";
mysql_query($q2) or die(mysql_error());

 echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message1").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';
}

if(isset($_POST['hname']) && isset($_POST['bg'])  && isset($_POST['nvol']))
{
$hname=$_POST['hname'];
$bg=$_POST['bg'];
$nvol=$_POST['nvol'];
$q2="UPDATE bloodstock set vol='$nvol' where HNAME='$hname'";
mysql_query($q2) or die(mysql_error());

 echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message3").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';
}
?>
</head>
<body>
<div id="top_message1" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(28,232,48,0.6),rgba(39,255,133,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Sucessfully updated phone number</div>
<div id="top_message2" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(28,232,48,0.6),rgba(39,255,133,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Sucessfully updated address</div>
<div id="top_message3" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(28,232,48,0.6),rgba(39,255,133,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Sucessfully updated Blood Stock infromation</div>
<section class="main">
<h1>WELCOME TO BLOOD BANK MANAGEMENT SYSTEM</h1>

<div style="padding:20; margin-left:505; font-size:25;">
Welcome <?php echo $_SESSION['admin'] ?>
</div>
<div style="padding:20; margin-left:300 ;font-size:25;">
<a href="admin2.php" >Back</a>
</div>
<section class="af-wrapper">
	            <h3>UPDATE HOSPITAL ADDRESS</h3>
				
				<form class="af-form" id="af-form" method="post" action="#" >
					
				
				
							<div class="af-outer af-required">	
			<div class="af-inner">	
<label for="Hospital">Hospital</label>			
        <select id="hospital" name="hname" required>
		<option>Choose a hospital</option>
			<?php
                  $arr = "select HNAME from hospital order by HID ASC";
				 $arr = mysql_query($arr) or die(mysql_error());
               while(   $a=mysql_fetch_row($arr))
                  {   foreach($a as $x)	
                        {		echo '<option>'.$x.'</option>';	
						        
						}}
						?>
        </select>
		</div>
		</div>
					
					
				
						<div class="af-outer af-required">
						<div class="af-inner">
							<label for="input-title">Address</label>
							<input type="text" name="hadd" id="input-title" required>
						</div>
					</div>
					
    <input type="submit" value="Submit" /> 
	
</form>
</section>
<section class="af-wrapper">
	            <h3>UPDATE HOSPITAL PHONE NUMBER</h3>
				
				<form class="af-form" id="af-form" method="post" action="#" >
					
				
				
							<div class="af-outer af-required">	
			<div class="af-inner">	
<label for="Hospital">Hospital</label>			
        <select id="hospital" name="hname" required>
		<option>Choose a hospital</option>
			<?php
                  $arr = "select HNAME from hospital order by HID ASC";
				 $arr = mysql_query($arr) or die(mysql_error());
               while(   $a=mysql_fetch_row($arr))
                  {   foreach($a as $x)	
                        {		echo '<option>'.$x.'</option>';	
						        
						}}
						?>
        </select>
		</div>
		</div>
					
					
			
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label for="input-phone">Phone Number</label>
						  <input  name="hphone" id="input-phone" required>
						</div>
					</div>
		
    <input type="submit" value="Submit" /> 
	
</form>
</section>  
<section class="af-wrapper">
	            <h3>UPDATE HOSPITAL BLOOD STOCK</h3>
				
				<form class="af-form" id="af-form" method="post" action="#" >
					
				
				
							<div class="af-outer af-required">	
			<div class="af-inner">	
<label for="Hospital">Hospital</label>			
        <select id="hospital" name="hname" required>
		<option>Choose a hospital</option>
			<?php
                  $arr = "select HNAME from hospital order by HID ASC";
				 $arr = mysql_query($arr) or die(mysql_error());
               while(   $a=mysql_fetch_row($arr))
                  {   foreach($a as $x)	
                        {		echo '<option>'.$x.'</option>';	
						        
						}}
						?>
        </select>
		</div>
		</div>
					
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label >BLOOD GROUP</label>
						  <select name="bg" id="input-email" required>
						  <option>A+</option>
						  <option>A-</option>
						  <option>B+</option>
						  <option>B-</option>
						  <option>O+</option>
						  <option>O-</option>
						  <option>AB+</option>
						  <option>AB-</option>
						  </select>
						</div>
					</div>
			
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label for="input-phone">NEW VOLUME</label>
						  <input  name="nvol" id="input-phone" required>
						</div>
					</div>
		
    <input type="submit" value="Submit" /> 
	
</form>
</section>  
</body>
</html>
