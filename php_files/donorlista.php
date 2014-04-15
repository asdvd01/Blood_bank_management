<?php
require('connect.php');
session_start();
if (!isset($_SESSION['admin']))
header("location:admin.php");
 if(isset($_POST['bg']) && !empty($_POST['bg']))
{ $bg=$_POST['bg'];
}
else
$bg='A+'; ?>
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
		
                 <a href="admin2.php" style="padding:20px; margin-left:1000px ;font-size:25px;" >Back</a>
                                   
				<div class="component">
				
				<p>In emergency you can contact following donor's</p>
				<h2>Donor's of <font color="red"><?php echo "$bg"; ?></font> blood group</h2>
				<table>
					<thead>
						<tr>
							<th>Donor's Name</th>
							<th>Donor's Address</th>
							<th>Donor's Phone</th>
						</tr>
					</thead>
					<tbody
						<?php
                  $arr2 = "select DNAME,DADD,DPHONE from donor where BG='$bg'";
				 $arr2 = mysql_query($arr2) or die(mysql_error());
               while(   $row2=mysql_fetch_array($arr2))
                  {   echo '<tr><td class="user-name">'.$row2['DNAME'].'</td><td class="user-email">'.$row2['DADD'].'</td><td class="user-phone">'.$row2['DPHONE'].'</td></tr>';
				    }
						?>
						
					</tbody>
				</table>
				</div>
			</body>
</html>			
