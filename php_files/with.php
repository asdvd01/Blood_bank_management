
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>BLOOD BANK MANAGEMENT SYSTEM</title>
	<link rel="icon" type="image/png" href="favicon.png" />
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
if(isset($_POST['hospital']) && isset($_POST['Number']) && isset($_POST['bg']))
 {$hospital = $_POST['hospital'];
$bg=$_POST['bg'];
$unit=$_POST['Number'];
$q1="select VOL from bloodstock where HNAME='$hospital' and BG='$bg' and VOl>0";
$q2="update bloodstock set VOL=VOL-'$unit' where HNAME='$hospital' and BG='$bg'";
$count=0; 
$result = mysql_query($q1) or die(mysql_error());
$count = mysql_num_rows($result);
$ar = mysql_fetch_array($result);
if ($count == 0 || $ar['VOL'] < $unit)
 {echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message2").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';}
else
{ mysql_query($q2) or die(mysql_error());
  echo '<script type="text/javascript">
   $(document).ready(function(){$("#top_message1").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>';
}
}
?>	
</head>
<body>
<div id="top_message1" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(28,232,48,0.6),rgba(39,255,133,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Sucessfull Submission</div>
<div id="top_message2" style="display:none; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(255,0,0,0.6),rgba(232,44,12,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:auto; margin-right:auto;">Not Available</div>
<section class="main">
<h1>WELCOME TO BLOOD BANK MANAGEMENT SYSTEM</h1>

<div style="padding:20; margin-left:505; font-size:25;">
Welcome <?php echo $_SESSION['username'] ?>
</div>
<div style="padding:20; margin-left:300 ;font-size:25;">
<a href="recep.php" >Back</a>
</div>
<section class="af-wrapper">
	            <h3>ENTER BLOOD GROUP</h3>
				
				<form class="af-form" id="af-form" method="post" action="#" >
					
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
					<label >Number of Units</label>
					<input name="Number" type="int" required></input>
					</div>
					</div>
			<div class="af-outer af-required">		
			<div class="af-inner">	
            <label for="Hospital">Hospital</label>			
            <select id="hospital" name="hospital" required>
            <option>Choose a Hospital</option>
			<?php
                  $arr = "select HNAME from hospital order by HID ASC";
				 $arr = mysql_query($arr) or die(mysql_error());
               while(   $a=mysql_fetch_row($arr))
                  {   foreach($a as $x)	
                        {		echo '<option>'.$x.'</option>';	
						        
						}}
						?>
                 </select>
               <input type="submit" value="Submit" /> 
	             </div>
				 </div>
</form>
</section> 
</body>
</html>

