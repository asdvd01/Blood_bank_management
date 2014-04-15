<?php
require('connect.php');
if(isset($_POST['bg']) && !empty($_POST['bg']))
{ $bg=$_POST['bg'];
}
else
$bg='A+';
 
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>BLOOD BANK MANAGEMENT SYSTEM</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
		<link rel="icon"  type="image/png"   href="favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/normalize1.css" />
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
	
	</head>
	<body>
		<center>
			<header>
				<h1>Select Blood Group</h1>
			</header>
			<form action="#" method="post">
			<label >BLOOD GROUP </label>
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
						  <input type="submit" value="search"/>
			</form></center>
			
			<div class="component">
			<p padding="20px 20px 20px 20px"; align="right";><a href="recep.php">Back </a></p>
				<h2>Blood Stock for <font color="red"><?php echo "$bg";   ?></font></h2>
				<p>Available Blood Stock</p>
				<table>
					<thead>
						<tr>
							<th>Name of Hospital</th>
							<th>Amount of Blood</th>
							<th>Address of Hospital</th>
							<th>Phone Number</th>
						</tr>
					</thead>
					<tbody>
					<?php
                  $arr1 = "select X.HNAME,X.VOL,Y.HADD,Y.HPHONE from bloodstock X,hospital Y where BG='$bg' and X.HNAME=Y.HNAME";
				 $arr1 = mysql_query($arr1) or die(mysql_error());
               while(   $row1=mysql_fetch_array($arr1))
                  {   echo '<tr><td class="user-name">'.$row1['HNAME'].'</td><td class="user-phone">'.$row1['VOL'].' units '.'<td class="user-name">'.$row1['HADD'].'</td><td class="user-phone">'.$row1['HPHONE'].'</td></tr>';
				    }
						?>
			
					</tbody>
				</table>
			</div>
			
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>