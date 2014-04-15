
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
if (!isset($_SESSION['username']))
header("location:index.php");
if(isset($_POST['fullname']) && isset($_POST['dod']) && isset($_POST['add']) && isset($_POST['phone']) && isset($_POST['bg']) && isset($_POST['hospital']))
{$dname=$_POST['fullname'];
$dat=$_POST['dod'];
$dadd=$_POST['add'];
$dphone=$_POST['phone'];
$bg=$_POST['bg'];
$hname=$_POST['hospital'];
$name=$_SESSION['username'];
$q1="INSERT INTO donor (DNAME,DADD,DPHONE,BG) values('$dname','$dadd',$dphone,'$bg')";
$q2="INSERT INTO donate (HNAME,RNAME,DAT) values('$hname','$name','$dat')";
mysql_query($q2) or die(mysql_error());
$q3 = "SELECT DNAME FROM donor WHERE DNAME='$dname' && BG='$bg'";
$count=0; 
$result = mysql_query($q3) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0){
mysql_query($q1) or die(mysql_error());
}
$q4="select BG,HNAME from bloodstock where BG='$bg' and HNAME='$hname'";
$q5="INSERT INTO bloodstock (HNAME,BG,VOL) values('$hname','$bg',1)";
$q6="Update bloodstock set VOL = (VOL+1) where HNAME ='$hname' && BG='$bg'";
$count=0; 
$result = mysql_query($q4) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0){
mysql_query($q5) or die(mysql_error());
}
else
{ mysql_query($q6) or die(mysql_error());
}
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
Welcome <?php echo $_SESSION['username'] ?>
</div>
<div style="padding:20; margin-left:300 ;font-size:25;">
<a href="recep.php" >Back</a>
</div>
<section class="af-wrapper">
	            <h3>ENTER DONOR'S DATA</h3>
				
				<form class="af-form" id="af-form" method="post" action="#" >
					
				
				
					<div class="af-outer af-required">
						<div class="af-inner">
							<label for="input-name">Name of Donor</label>
							<input type="text" name="fullname" id="input-name" required>
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
							<label for="input-bdate">Date of Donation</label>
							<input type="date" name="dod" id="input-bdate" placeholder="MM/DD/YYYY" required>
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
				<div class="af-outer af-required">	
			<div class="af-inner">	
<label for="Hospital">Hospital</label>			
        <select id="hospital" name="hospital" required>
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
    <input type="submit" value="Submit" /> 
	
</form>
</section> 
</body>
</html>
