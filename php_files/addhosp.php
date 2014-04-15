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
if(isset($_POST['name'])  && isset($_POST['add']) && isset($_POST['phone']))
{$hname=$_POST['name'];
$hadd=$_POST['add'];
$hphone=$_POST['phone'];


$q1="INSERT INTO hospital (HNAME,HADD,HPHONE) values('$hname','$hadd','$hphone')";
mysql_query($q1) or die(mysql_error());


  echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message1").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';
}
 
?>
</head>
<body>
<div id="top_message1" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(28,232,48,0.6),rgba(39,255,133,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Sucessfull Submission</div>
<section class="main">
<h1>WELCOME TO BLOOD BANK MANAGEMENT SYSTEM</h1>

<div style="padding:20; margin-left:505; font-size:25;">
Welcome <?php echo $_SESSION['admin'] ?>
</div>
<div style="padding:20; margin-left:300 ;font-size:25;">
<a href="admin2.php" >Back</a>
</div>
<section class="af-wrapper">
	            <h3>ENTER HOSPITAL DATA</h3>
				
				<form class="af-form" id="af-form" method="post" action="#" >
					
				
				
					<div class="af-outer af-required">
						<div class="af-inner">
							<label for="input-name">Name of Hospital</label>
							<input type="text" name="name" id="input-name" required>
						</div>
					</div>
					
				
			
						<div class="af-outer af-required">
						<div class="af-inner">
							<label for="input-title">Address</label>
							<input type="text" name="add" id="input-title" required>
						</div>
					</div>
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label for="input-phone">Phone Number</label>
						  <input  name="phone" id="input-phone" required>
						</div>
					</div>
			
                  <input type="submit" value="Submit" /> 
	
</form>
</section> 
</body>
</html>
